<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class AdminJob {
    public static function all(): array {
        return Database::connection()->query("SELECT * FROM jobs ORDER BY sort_order ASC, created_at DESC")->fetchAll();
    }

    public static function find(int $id): ?array {
        $stmt = Database::connection()->prepare("SELECT * FROM jobs WHERE id=:id LIMIT 1");
        $stmt->execute(['id'=>$id]);
        $row=$stmt->fetch();
        return $row ?: null;
    }

    public static function save(array $data): int {
        $pdo = Database::connection();
        $fields = ['title','slug','department','location','job_type','experience','salary_range','short_description','description','responsibilities','requirements','status','sort_order'];
        $payload=[];
        foreach($fields as $f) $payload[$f]=$data[$f] ?? null;
        $payload['sort_order']=(int)($payload['sort_order'] ?? 0);
        $payload['status']=in_array($payload['status'] ?? 'active',['active','inactive'],true)?$payload['status']:'active';

        if(!empty($data['id'])){
            $payload['id']=(int)$data['id'];
            $set=implode(',', array_map(fn($f)=>"$f=:$f",$fields));
            $stmt=$pdo->prepare("UPDATE jobs SET $set WHERE id=:id");
            $stmt->execute($payload);
            return (int)$payload['id'];
        }

        $cols=implode(',',$fields);
        $vals=':'.implode(',:',$fields);
        $stmt=$pdo->prepare("INSERT INTO jobs ($cols) VALUES ($vals)");
        $stmt->execute($payload);
        return (int)$pdo->lastInsertId();
    }

    public static function toggleStatus(int $id): void {
        $stmt=Database::connection()->prepare("UPDATE jobs SET status=IF(status='active','inactive','active') WHERE id=:id");
        $stmt->execute(['id'=>$id]);
    }

    public static function applications(): array {
        return Database::connection()->query("SELECT a.*, j.title AS job_title FROM job_applications a LEFT JOIN jobs j ON j.id=a.job_id ORDER BY a.created_at DESC")->fetchAll();
    }
}
