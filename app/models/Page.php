<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class Page {
    public static function findEnabledBySlug(string $slug): ?array {
        $pdo = Database::connection();
        $stmt = $pdo->prepare("SELECT * FROM pages WHERE slug = :slug AND status = 'enabled' LIMIT 1");
        $stmt->execute(['slug' => $slug]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function menu(): array {
        $pdo = Database::connection();
        $stmt = $pdo->query("SELECT id, title, menu_title, slug, parent_id FROM pages WHERE status='enabled' AND show_in_menu=1 ORDER BY parent_id ASC, sort_order ASC, title ASC");
        return $stmt->fetchAll();
    }
}
