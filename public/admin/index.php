<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/core/compat.php';

define('BASE_PATH', dirname(__DIR__, 2));
define('APP_PATH', BASE_PATH . '/app');

require APP_PATH . '/helpers/functions.php';
require APP_PATH . '/core/Env.php';
require APP_PATH . '/core/Database.php';
require APP_PATH . '/core/AdminAuth.php';
require APP_PATH . '/controllers/AdminController.php';

\App\Core\Env::load(BASE_PATH . '/.env');
secure_session_start();

if (env('APP_ENV', 'production') === 'local') {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(E_ALL);
}

$action = $_GET['action'] ?? 'dashboard';
$controller = new \App\Controllers\AdminController();

match ($action) {
    'login' => $controller->login(),
    'logout' => $controller->logout(),
    'pages' => $controller->pages(),
    'page-create' => $controller->pageForm(),
    'page-edit' => $controller->pageForm((int)($_GET['id'] ?? 0)),
    'page-save' => $controller->pageSave(),
    'page-toggle' => $controller->pageToggle((int)($_GET['id'] ?? 0)),
    'jobs' => $controller->jobs(),
    'job-create' => $controller->jobForm(),
    'job-edit' => $controller->jobForm((int)($_GET['id'] ?? 0)),
    'job-save' => $controller->jobSave(),
    'job-toggle' => $controller->jobToggle((int)($_GET['id'] ?? 0)),
    'applications' => $controller->applications(),
    'enquiries' => $controller->enquiries(),
    'portfolio' => $controller->portfolio(),
    'testimonials' => $controller->testimonials(),
    'achievements' => $controller->achievements(),
    default => $controller->dashboard(),
};
