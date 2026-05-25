<?php
// CLI only: php database/create-admin.php admin@example.com StrongPassword
declare(strict_types=1);

if (PHP_SAPI !== 'cli') {
    exit("CLI only\n");
}
if ($argc < 3) {
    exit("Usage: php database/create-admin.php admin@example.com StrongPassword\n");
}

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

require APP_PATH . '/helpers/functions.php';
require APP_PATH . '/core/Env.php';
require APP_PATH . '/core/Database.php';

\App\Core\Env::load(BASE_PATH . '/.env');

$email = $argv[1];
$password = $argv[2];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Invalid email\n");
}
if (strlen($password) < 10) {
    exit("Password must be at least 10 characters\n");
}

$hash = password_hash($password, PASSWORD_DEFAULT);
$pdo = \App\Core\Database::connection();
$stmt = $pdo->prepare("INSERT INTO admins (name,email,password_hash,status) VALUES (:name,:email,:hash,'active')
ON DUPLICATE KEY UPDATE password_hash=VALUES(password_hash), status='active'");
$stmt->execute([
    'name' => 'Administrator',
    'email' => $email,
    'hash' => $hash,
]);

echo "Admin created/updated: {$email}\n";
