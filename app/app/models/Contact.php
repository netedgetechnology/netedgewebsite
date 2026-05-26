<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class Contact {
    public static function create(array $data): void {
        $stmt = Database::connection()->prepare("INSERT INTO contact_enquiries
            (name,email,phone,company,service,message,ip_address,user_agent)
            VALUES (:name,:email,:phone,:company,:service,:message,:ip_address,:user_agent)");
        $stmt->execute([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'company'=>$data['company'],
            'service'=>$data['service'],
            'message'=>$data['message'],
            'ip_address'=>$_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent'=>substr($_SERVER['HTTP_USER_AGENT'] ?? '',0,255),
        ]);
    }

    public static function all(): array {
        return Database::connection()->query("SELECT * FROM contact_enquiries ORDER BY created_at DESC")->fetchAll();
    }
}
