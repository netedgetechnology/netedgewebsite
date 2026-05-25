<?php
declare(strict_types=1);

namespace App\Core;

use PDO;

final class Database {
    private static ?PDO $pdo = null;

    public static function connection(): PDO {
        if (self::$pdo) return self::$pdo;

        $host = env('DB_HOST', 'localhost');
        $port = env('DB_PORT', '3306');
        $db   = env('DB_DATABASE', '');
        $user = env('DB_USERNAME', '');
        $pass = env('DB_PASSWORD', '');

        $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";
        self::$pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);

        return self::$pdo;
    }
}
