<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Contact;

final class ContactController {
    public function submit(): void {
        verify_csrf();

        if (!empty($_POST['website'])) {
            header('Location: '.url('contact-us').'?sent=1');
            exit;
        }

        $name=trim((string)($_POST['name'] ?? ''));
        $email=trim((string)($_POST['email'] ?? ''));
        $phone=trim((string)($_POST['phone'] ?? ''));
        $company=trim((string)($_POST['company'] ?? ''));
        $service=trim((string)($_POST['service'] ?? ''));
        $message=trim((string)($_POST['message'] ?? ''));

        if($name==='' || !filter_var($email,FILTER_VALIDATE_EMAIL) || $phone==='' || $message===''){
            $_SESSION['flash_error']='Please fill all required fields correctly.';
            header('Location: '.url('contact-us'));
            exit;
        }

        Contact::create(compact('name','email','phone','company','service','message'));
        $_SESSION['flash_success']='Thank you. Your enquiry has been submitted successfully.';
        header('Location: '.url('contact-us').'?sent=1');
        exit;
    }
}
