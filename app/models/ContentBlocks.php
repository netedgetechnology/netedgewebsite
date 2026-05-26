<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class ContentBlocks {
    public static function portfolio(): array {
        return Database::connection()->query("SELECT * FROM portfolio_items WHERE status='enabled' ORDER BY sort_order ASC, created_at DESC")->fetchAll();
    }
    public static function testimonials(): array {
        return Database::connection()->query("SELECT * FROM testimonials WHERE status='enabled' ORDER BY sort_order ASC, created_at DESC")->fetchAll();
    }
    public static function achievements(): array {
        return Database::connection()->query("SELECT * FROM achievements WHERE status='enabled' ORDER BY sort_order ASC, id ASC")->fetchAll();
    }
    public static function adminAll(string $table): array {
        $allowed=['portfolio_items','testimonials','achievements'];
        if(!in_array($table,$allowed,true)) return [];
        return Database::connection()->query("SELECT * FROM {$table} ORDER BY sort_order ASC, id DESC")->fetchAll();
    }
}
