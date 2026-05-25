<?php
declare(strict_types=1);

session_start();

$cmsUser = 'netedgeadmin';

/*
 * Current temporary CMS password hash.
 * Login password: Y#b^nC3iS%gaYD3%Yznsuixz
 * Change this later after the site is stable.
 */
$cmsHash = '7c730995bb774df7ff1c5d3c42c258e4abc92c95df5fb5a580f72a82706a4187';
$cmsSessionKey = 'netedge_cms_admin';

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if (empty($_SESSION['cms_csrf'])) {
    $_SESSION['cms_csrf'] = bin2hex(random_bytes(32));
}

$isLoggedIn = !empty($_SESSION[$cmsSessionKey]);

function cms_redirect(string $to): void
{
    header('Location: ' . $to);
    exit;
}

function cms_header(string $title): void
{
    echo '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">';
    echo '<title>' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</title>';
    echo '<style>
    *{box-sizing:border-box}
    body{margin:0;font-family:Arial,sans-serif;background:#f5f8fc;color:#0f172a}
    .wrap{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px}
    .card{width:min(430px,92vw);background:#fff;border:1px solid #e5edf7;border-radius:22px;padding:30px;box-shadow:0 24px 60px rgba(15,23,42,.10)}
    h1{margin:0 0 8px;font-size:28px}
    p{color:#64748b;margin:0 0 18px}
    label{display:block;margin-top:16px;font-weight:700}
    input{width:100%;padding:13px 14px;border:1px solid #d8e2ef;border-radius:12px;margin-top:7px;font-size:15px}
    button,.btn{display:inline-flex;align-items:center;justify-content:center;border:0;border-radius:12px;padding:12px 16px;background:#0646a8;color:#fff;font-weight:800;font-size:15px;cursor:pointer;text-decoration:none}
    .error{background:#fee2e2;color:#991b1b;padding:10px 12px;border-radius:12px;margin:12px 0}
    .top{background:#fff;border-bottom:1px solid #e5edf7}
    .inner{max-width:1180px;margin:auto;padding:18px 22px;display:flex;justify-content:space-between;align-items:center}
    .main{max-width:1180px;margin:auto;padding:30px 22px}
    .grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
    .page{background:#fff;border:1px solid #e5edf7;border-radius:18px;padding:18px;box-shadow:0 14px 34px rgba(15,23,42,.06)}
    .page h3{margin:0 0 8px}
    .logout{background:#eef6ff;color:#0646a8}
    @media(max-width:900px){.grid{grid-template-columns:1fr}}
    </style></head><body>';
}

function cms_footer(): void
{
    echo '</body></html>';
}

function render_login(?string $error = null): void
{
    $csrf = $_SESSION['cms_csrf'] ?? '';

    cms_header('Netedge CMS Login');

    echo '<main class="wrap"><form class="card" method="post" action="/cms/login">';
    echo '<input type="hidden" name="_csrf" value="' . htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8') . '">';
    echo '<h1>Netedge CMS</h1><p>Sign in to manage website pages.</p>';

    if ($error) {
        echo '<div class="error">' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</div>';
    }

    echo '<label>Username<input name="username" autocomplete="username" required></label>';
    echo '<label>Password<input name="password" type="password" autocomplete="current-password" required></label>';
    echo '<button type="submit" style="width:100%;margin-top:20px">Login</button>';
    echo '</form></main>';

    cms_footer();
}

function render_dashboard(): void
{
    $csrf = $_SESSION['cms_csrf'] ?? '';
    $registry = dirname(__DIR__) . '/storage/cms/pages.json';
    $pages = [];

    if (is_file($registry)) {
        $decoded = json_decode((string)file_get_contents($registry), true);
        if (is_array($decoded)) {
            $pages = $decoded;
        }
    }

    if (!$pages) {
        $pages = [
            ['slug' => 'home', 'title' => 'Home'],
            ['slug' => 'server-management', 'title' => 'Server Management'],
            ['slug' => 'virtualization-management', 'title' => 'Virtualization Management'],
            ['slug' => 'technical-support', 'title' => 'Technical Support'],
            ['slug' => 'security-services', 'title' => 'Security Services'],
            ['slug' => 'webhosting-support', 'title' => 'Webhosting Support'],
            ['slug' => 'datacenter-management', 'title' => 'Datacenter Management'],
            ['slug' => 'it-infrastructure-automation', 'title' => 'IT Infrastructure Automation'],
            ['slug' => 'remote-infrastructure-management', 'title' => 'Remote Infrastructure Management'],
            ['slug' => 'cloud-infrastructure-management', 'title' => 'Cloud Infrastructure Management'],
            ['slug' => 'noc-management', 'title' => 'NOC Management'],
            ['slug' => 'web-application-development', 'title' => 'Web Application Management'],
            ['slug' => 'mobile-application-development', 'title' => 'Mobile Application Management'],
            ['slug' => 'dedicated-technical-staffing', 'title' => 'Dedicated Staffing'],
            ['slug' => 'shared-technical-staffing', 'title' => 'Shared Staffing'],
            ['slug' => 'partnership', 'title' => 'Partnership'],
            ['slug' => 'company', 'title' => 'Company'],
            ['slug' => 'terms', 'title' => 'Terms'],
            ['slug' => 'privacy-policy', 'title' => 'Privacy Policy'],
            ['slug' => 'contact-us', 'title' => 'Contact Us'],
            ['slug' => 'achievements', 'title' => 'Achievements'],
            ['slug' => 'why-us', 'title' => 'Why Us'],
            ['slug' => 'testimonials', 'title' => 'Testimonials'],
            ['slug' => 'our-expertise', 'title' => 'Our Expertise'],
        ];
    }

    cms_header('Netedge CMS');

    echo '<header class="top"><div class="inner"><h1>Netedge CMS</h1>';
    echo '<form method="post" action="/cms/logout">';
    echo '<input type="hidden" name="_csrf" value="' . htmlspecialchars($csrf, ENT_QUOTES, 'UTF-8') . '">';
    echo '<button class="logout" type="submit">Logout</button>';
    echo '</form></div></header>';

    echo '<main class="main">';
    echo '<h2>Pages</h2>';
    echo '<p>CMS-ready page registry. Public website is currently static; this CMS area is prepared for page management.</p>';
    echo '<div class="grid">';

    foreach ($pages as $page) {
        $slug = htmlspecialchars((string)($page['slug'] ?? ''), ENT_QUOTES, 'UTF-8');
        $title = htmlspecialchars((string)($page['title'] ?? $slug), ENT_QUOTES, 'UTF-8');

        echo '<div class="page">';
        echo '<h3>' . $title . '</h3>';
        echo '<code>/' . $slug . '</code><br><br>';
        echo '<span class="btn">CMS Ready</span>';
        echo '</div>';
    }

    echo '</div></main>';

    cms_footer();
}

if ($method === 'HEAD') {
    if ($uri === '/cms' || $uri === '/cms/') {
        if ($isLoggedIn) {
            http_response_code(200);
        } else {
            header('Location: /cms/login', true, 302);
        }
        exit;
    }

    if ($uri === '/cms/login') {
        http_response_code(200);
        exit;
    }
}

if ($uri === '/cms' || $uri === '/cms/') {
    if (!$isLoggedIn) {
        cms_redirect('/cms/login');
    }

    render_dashboard();
    exit;
}

if ($uri === '/cms/login' && $method === 'GET') {
    if ($isLoggedIn) {
        cms_redirect('/cms');
    }

    render_login();
    exit;
}

if ($uri === '/cms/login' && $method === 'POST') {
    $token = $_POST['_csrf'] ?? '';

    if (!$token || !hash_equals($_SESSION['cms_csrf'] ?? '', (string)$token)) {
        http_response_code(419);
        echo 'Invalid CSRF token';
        exit;
    }

    $username = trim((string)($_POST['username'] ?? ''));
    $password = (string)($_POST['password'] ?? '');

    if ($username === $cmsUser && hash_equals($cmsHash, hash('sha256', $password))) {
        session_regenerate_id(true);
        $_SESSION[$cmsSessionKey] = true;
        cms_redirect('/cms');
    }

    render_login('Invalid username or password.');
    exit;
}

if ($uri === '/cms/logout' && $method === 'POST') {
    $token = $_POST['_csrf'] ?? '';

    if (!$token || !hash_equals($_SESSION['cms_csrf'] ?? '', (string)$token)) {
        http_response_code(419);
        echo 'Invalid CSRF token';
        exit;
    }

    unset($_SESSION[$cmsSessionKey]);
    cms_redirect('/cms/login');
}

http_response_code(404);
echo 'CMS route not found';
