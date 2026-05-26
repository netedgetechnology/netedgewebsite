<?php
declare(strict_types=1);

namespace App\Core;

final class AdminAuth {
    public static function user(): ?array {
        return $_SESSION['admin_user'] ?? null;
    }

    public static function check(): bool {
        return !empty($_SESSION['admin_user']['id']);
    }

    public static function requireLogin(): void {
        if (!self::check()) {
            header('Location: /admin/?action=login');
            exit;
        }
    }

    public static function attempt(string $email, string $password): bool {
        $pdo = Database::connection();
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE email = :email AND status = 'active' LIMIT 1");
        $stmt->execute(['email' => $email]);
        $admin = $stmt->fetch();

        if (!$admin || !password_verify($password, $admin['password_hash'])) {
            return false;
        }

        session_regenerate_id(true);
        $_SESSION['admin_user'] = [
            'id' => (int)$admin['id'],
            'name' => $admin['name'],
            'email' => $admin['email'],
        ];

        $pdo->prepare("UPDATE admins SET last_login_at = NOW() WHERE id = :id")->execute(['id' => $admin['id']]);
        return true;
    }

    public static function logout(): void {
        unset($_SESSION['admin_user']);
        session_regenerate_id(true);
    }
}
