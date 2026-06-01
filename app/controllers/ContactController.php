<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Contact;

final class ContactController {
    public function inquire(): void {
        $title = 'Get a Quote / Inquire | Netedge Technology';
        $description = 'Send your project or IT service inquiry to Netedge Technology.';
        $view = 'pages/inquire';
        require APP_PATH . '/views/layout.php';
    }

    public function inquireSubmit(): void {
        $this->handleSubmit('inquire');
    }

    public function discuss(): void {
        $title = 'Discuss A Requirement | Netedge Technology';
        $description = 'Discuss your IT support, cloud, hosting, software development or staffing requirement with Netedge Technology.';
        $view = 'pages/discuss-a-requirement';
        require APP_PATH . '/views/layout.php';
    }

    public function discussSubmit(): void {
        $this->handleSubmit('discuss-a-requirement');
    }

    public function submit(): void {
        $this->handleSubmit('contact-us');
    }

    private function handleSubmit(string $redirectSlug): void {
        verify_csrf();

        $formStarted = (int)($_POST['form_started'] ?? 0);

        if (
            $formStarted > 0 &&
            (time() - $formStarted) < 5
        ) {
            $_SESSION['flash_error'] = 'Please take a moment to complete the form.';
            header('Location: '.url($redirectSlug));
            exit;
        }


        if (!empty($_POST['website'])) {
            header('Location: '.url($redirectSlug).'?sent=1');
            exit;
        }

        $name=trim((string)($_POST['name'] ?? ''));
        $email=trim((string)($_POST['email'] ?? ''));
        $country_code=trim((string)($_POST['country_code'] ?? ''));
        $phone=trim((string)($_POST['phone'] ?? ''));
        $company=trim((string)($_POST['company'] ?? ''));
        $service=trim((string)($_POST['service'] ?? ''));
        $message=trim((string)($_POST['message'] ?? ''));
        $phone_full = trim(($country_code !== '' ? $country_code.' ' : '').$phone);

        if($name==='' || !filter_var($email,FILTER_VALIDATE_EMAIL) || $phone_full==='' || $message===''){
            $_SESSION['flash_error']='Please fill all required fields correctly.';
            header('Location: '.url($redirectSlug));
            exit;
        }

        $phone = $phone_full;
        Contact::create(compact('name','email','phone','company','service','message'));

        $subject = 'New website inquiry - Netedge Technology';
        $body = "New website inquiry\n\n"
            ."Name: {$name}\n"
            ."Email: {$email}\n"
            ."Phone: {$phone}\n"
            ."Company: {$company}\n"
            ."Service: {$service}\n\n"
            ."Message:\n{$message}\n";
        $headers = "From: Netedge Website <sales@netedgetechnology.com>\r\n"
            ."Reply-To: {$email}\r\n";
        @mail('sales@netedgetechnology.com', $subject, $body, $headers);

        $customerSubject = 'We received your inquiry - Netedge Technology';
        $customerBody = "Dear {$name},\n\n"
            ."Thank you for contacting Netedge Technology. We have received your inquiry and our team will review it shortly.\n\n"
            ."Submitted details:\n"
            ."Service: {$service}\n"
            ."Phone: {$phone}\n\n"
            ."Message:\n{$message}\n\n"
            ."Regards,\nNetedge Technology\n";
        $customerHeaders = "From: Netedge Technology <sales@netedgetechnology.com>\r\n"
            ."Reply-To: sales@netedgetechnology.com\r\n";
        @mail($email, $customerSubject, $customerBody, $customerHeaders);

        $_SESSION['flash_success']='Thank you. Your inquiry has been submitted successfully. A confirmation email has been sent to you.';
        header('Location: '.url($redirectSlug).'?sent=1');
        exit;
    }
}
