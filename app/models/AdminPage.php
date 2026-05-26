<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class AdminPage {
    public static function all(): array {
        return Database::connection()
            ->query("SELECT * FROM pages ORDER BY sort_order ASC, title ASC")
            ->fetchAll();
    }

    public static function find(int $id): ?array {
        $stmt = Database::connection()->prepare("SELECT * FROM pages WHERE id=:id LIMIT 1");
        $stmt->execute(['id'=>$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function save(array $data): int {
        $pdo = Database::connection();

        $fields = [
            'title','slug','menu_title','parent_id','template','banner_title','banner_subtitle',
            'short_description','content','featured_image','meta_title','meta_description',
            'meta_keywords','canonical_url','og_title','og_description','og_image','status',
            'show_in_menu','sort_order'
        ];

        $payload = [];
        foreach ($fields as $f) $payload[$f] = $data[$f] ?? null;
        $payload['parent_id'] = $payload['parent_id'] !== '' ? $payload['parent_id'] : null;
        $payload['show_in_menu'] = !empty($payload['show_in_menu']) ? 1 : 0;
        $payload['sort_order'] = (int)($payload['sort_order'] ?? 0);
        $payload['status'] = in_array($payload['status'] ?? 'enabled', ['enabled','disabled'], true) ? $payload['status'] : 'enabled';

        if (!empty($data['id'])) {
            $payload['id'] = (int)$data['id'];
            $set = implode(',', array_map(fn($f)=>"$f=:$f", $fields));
            $stmt = $pdo->prepare("UPDATE pages SET $set WHERE id=:id");
            $stmt->execute($payload);
            return (int)$payload['id'];
        }

        $cols = implode(',', $fields);
        $vals = ':' . implode(',:', $fields);
        $stmt = $pdo->prepare("INSERT INTO pages ($cols) VALUES ($vals)");
        $stmt->execute($payload);
        return (int)$pdo->lastInsertId();
    }

    public static function toggleStatus(int $id): void {
        $pdo = Database::connection();
        $stmt = $pdo->prepare("UPDATE pages SET status = IF(status='enabled','disabled','enabled') WHERE id=:id");
        $stmt->execute(['id'=>$id]);
    }
}
