<?php
namespace App\Controllers;

class CmsController
{
    private array $config;

    public function __construct()
    {
        $this->config = require __DIR__ . '/../config/cms.php';
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    private function isLoggedIn(): bool
    {
        return !empty($_SESSION[$this->config['session_key']]);
    }

    private function baseUrl(string $path = ''): string
    {
        return $path;
    }

    private function requireLogin(): void
    {
        if (!$this->isLoggedIn()) {
            header('Location: /cms/login');
            exit;
        }
    }

    private function csrf(): string
    {
        if (empty($_SESSION['cms_csrf'])) {
            $_SESSION['cms_csrf'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['cms_csrf'];
    }

    private function checkCsrf(): void
    {
        $token = $_POST['_csrf'] ?? '';
        if (!$token || !hash_equals($_SESSION['cms_csrf'] ?? '', $token)) {
            http_response_code(419);
            echo 'Invalid CSRF token';
            exit;
        }
    }

    private function pages(): array
    {
        $file = $this->config['pages_registry'];
        if (!is_file($file)) {
            return [];
        }

        $pages = json_decode(file_get_contents($file), true);
        return is_array($pages) ? $pages : [];
    }

    private function pageContent(string $slug): array
    {
        $safe = preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));
        $stored = $this->config['pages_storage'] . '/' . $safe . '.json';

        if (is_file($stored)) {
            $data = json_decode(file_get_contents($stored), true);
            if (is_array($data)) {
                return $data;
            }
        }

        foreach ($this->pages() as $page) {
            if (($page['slug'] ?? '') === $safe && !empty($page['file'])) {
                $path = __DIR__ . '/../../' . $page['file'];
                if (is_file($path)) {
                    return [
                        'slug' => $safe,
                        'title' => $page['title'] ?? $safe,
                        'content' => file_get_contents($path),
                        'updated_at' => null,
                    ];
                }
            }
        }

        return [
            'slug' => $safe,
            'title' => ucwords(str_replace('-', ' ', $safe)),
            'content' => '',
            'updated_at' => null,
        ];
    }

    private function render(string $view, array $data = []): void
    {
        extract($data);
        include __DIR__ . '/../views/cms/' . $view . '.php';
    }

    public function login(): void
    {
        if ($this->isLoggedIn()) {
            header('Location: /cms');
            exit;
        }

        $error = null;
        $csrf = $this->csrf();
        $this->render('login', compact('error', 'csrf'));
    }

    public function authenticate(): void
    {
        $this->checkCsrf();

        $username = trim($_POST['username'] ?? '');
        $password = (string)($_POST['password'] ?? '');

        if (
            $username === $this->config['username']
            && hash_equals($this->config['password_hash'], hash('sha256', $password))
        ) {
            session_regenerate_id(true);
            $_SESSION[$this->config['session_key']] = true;
            header('Location: /cms');
            exit;
        }

        $error = 'Invalid username or password.';
        $csrf = $this->csrf();
        $this->render('login', compact('error', 'csrf'));
    }

    public function logout(): void
    {
        $this->checkCsrf();
        unset($_SESSION[$this->config['session_key']]);
        header('Location: /cms/login');
        exit;
    }

    public function index(): void
    {
        $this->requireLogin();
        $pages = $this->pages();
        $csrf = $this->csrf();
        $this->render('dashboard', compact('pages', 'csrf'));
    }

    public function edit(string $slug): void
    {
        $this->requireLogin();
        $page = $this->pageContent($slug);
        $csrf = $this->csrf();
        $this->render('edit', compact('page', 'csrf'));
    }

    public function save(string $slug): void
    {
        $this->requireLogin();
        $this->checkCsrf();

        $safe = preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));

        $data = [
            'slug' => $safe,
            'title' => trim($_POST['title'] ?? $safe),
            'content' => (string)($_POST['content'] ?? ''),
            'updated_at' => date('c'),
        ];

        if (!is_dir($this->config['pages_storage'])) {
            mkdir($this->config['pages_storage'], 0755, true);
        }

        file_put_contents(
            $this->config['pages_storage'] . '/' . $safe . '.json',
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );

        header('Location: /cms/pages/' . $safe . '?saved=1');
        exit;
    }
}
