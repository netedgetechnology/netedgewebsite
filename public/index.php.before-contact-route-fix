<?php
declare(strict_types=1);

if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', BASE_PATH);
}
if (!defined('APP_PATH')) {
    define('APP_PATH', BASE_PATH . '/app');
}
if (!defined('PUBLIC_PATH')) {
    define('PUBLIC_PATH', BASE_PATH . '/public');
}
if (!defined('STORAGE_PATH')) {
    define('STORAGE_PATH', BASE_PATH . '/storage');
}
if (!defined('VIEW_PATH')) {
    define('VIEW_PATH', APP_PATH . '/views');
}



// Force-load project root .env before models/layout/database are used.
$netedgeEnvFile = __DIR__ . '/../.env';
if (is_file($netedgeEnvFile) && is_readable($netedgeEnvFile)) {
    $lines = file($netedgeEnvFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0) {
            continue;
        }
        if (strpos($line, '=') === false) {
            continue;
        }
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        if (
            (strlen($value) >= 2) &&
            (($value[0] === '"' && substr($value, -1) === '"') || ($value[0] === "'" && substr($value, -1) === "'"))
        ) {
            $value = substr($value, 1, -1);
        }

        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
        putenv($key . '=' . $value);
    }
}



require_once __DIR__ . '/../app/core/compat.php';
require_once __DIR__ . '/../app/helpers/functions.php';

foreach ([
    __DIR__ . '/../app/core/Database.php',
    __DIR__ . '/../app/core/Env.php',
    __DIR__ . '/../app/core/Router.php',
    __DIR__ . '/../app/core/Response.php',
    __DIR__ . '/../app/core/Request.php',
] as $coreFile) {
    if (is_file($coreFile)) {
        require_once $coreFile;
    }
}

if (is_file(__DIR__ . '/../app/models/Page.php')) {
    require_once __DIR__ . '/../app/models/Page.php';
}


spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    if (strpos($class, $prefix) !== 0) {
        return;
    }

    $relative = substr($class, strlen($prefix));
    $relative = str_replace('\\', '/', $relative);

    $paths = [
        __DIR__ . '/../app/' . $relative . '.php',
        __DIR__ . '/../app/' . strtolower($relative) . '.php',
    ];

    foreach ($paths as $path) {
        if (is_file($path)) {
            require_once $path;
            return;
        }
    }
});

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

if ($scriptDir && $scriptDir !== '/' && strpos($uri, $scriptDir) === 0) {
    $uri = substr($uri, strlen($scriptDir)) ?: '/';
}

$uri = '/' . trim($uri, '/');
if ($uri === '//') {
    $uri = '/';
}

function netedge_render_page(string $slug): void
{
    $safe = preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));
    if ($safe === '') {
        $safe = 'home';
    }

    $viewFile = __DIR__ . '/../app/views/pages/' . $safe . '.php';

    if (!is_file($viewFile)) {
        http_response_code(404);
        $error = __DIR__ . '/../app/views/errors/404.php';
        if (is_file($error)) {
            include $error;
        } else {
            echo '404 Not Found';
        }
        return;
    }

    $title = ucwords(str_replace('-', ' ', $safe)) . ' | Netedge Technology';
    $description = 'Netedge Technology provides professional IT infrastructure, support, software development and staffing services.';

    // IMPORTANT: layout.php expects a relative view name, not a full filesystem path.
    $view = 'pages/' . $safe;

    include __DIR__ . '/../app/views/layout.php';
}

function netedge_call_controller(string $class, string $method, array $args = []): void
{
    if (!class_exists($class)) {
        http_response_code(500);
        echo 'Controller not found: ' . htmlspecialchars($class, ENT_QUOTES, 'UTF-8');
        return;
    }

    $controller = new $class();

    if (!method_exists($controller, $method)) {
        http_response_code(500);
        echo 'Controller method not found.';
        return;
    }

    $controller->$method(...$args);
}

$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
$routeMethod = $method === 'HEAD' ? 'GET' : $method;
header('X-Netedge-URI: ' . $uri);
header('X-Netedge-Method: ' . $method);


if ($uri === '/') {
    netedge_render_page('home');
    exit;
}

if ($uri === '/cms' && $routeMethod === 'GET') {
    netedge_call_controller(\App\Controllers\CmsController::class, 'index');
    exit;
}

if ($uri === '/cms/login' && $routeMethod === 'GET') {
    netedge_call_controller(\App\Controllers\CmsController::class, 'login');
    exit;
}

if ($uri === '/cms/login' && $routeMethod === 'POST') {
    netedge_call_controller(\App\Controllers\CmsController::class, 'authenticate');
    exit;
}

if ($uri === '/cms/logout' && $routeMethod === 'POST') {
    netedge_call_controller(\App\Controllers\CmsController::class, 'logout');
    exit;
}

if (preg_match('#^/cms/pages/([a-z0-9\-]+)$#', $uri, $m)) {
    if ($routeMethod === 'POST') {
        netedge_call_controller(\App\Controllers\CmsController::class, 'save', [$m[1]]);
    } else {
        netedge_call_controller(\App\Controllers\CmsController::class, 'edit', [$m[1]]);
    }
    exit;
}

if ($uri === '/server-management-rebuild') {
    netedge_render_page('server-management-rebuild');
    exit;
}

$slug = trim($uri, '/');
if ($slug !== '') {
    netedge_render_page($slug);
    exit;
}

http_response_code(404);
echo '404 Not Found';
