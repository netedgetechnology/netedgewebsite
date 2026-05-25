<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class Job {
    public static function active(): array {
        $stmt = Database::connection()->query("SELECT * FROM jobs WHERE status='active' ORDER BY sort_order ASC, created_at DESC");
        return $stmt->fetchAll();
    }

    public static function findActiveBySlug(string $slug): ?array {
        $stmt = Database::connection()->prepare("SELECT * FROM jobs WHERE slug=:slug AND status='active' LIMIT 1");
        $stmt->execute(['slug'=>$slug]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function apply(int $jobId, array $data): void {
        $stmt = Database::connection()->prepare("INSERT INTO job_applications
            (job_id, name, email, phone, experience, message, resume_path, ip_address, user_agent)
            VALUES (:job_id,:name,:email,:phone,:experience,:message,:resume_path,:ip_address,:user_agent)");
        $stmt->execute([
            'job_id'=>$jobId,
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'experience'=>$data['experience'],
            'message'=>$data['message'],
            'resume_path'=>$data['resume_path'],
            'ip_address'=>$_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent'=>substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255),
        ]);
    }
}
