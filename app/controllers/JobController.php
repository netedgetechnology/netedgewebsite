<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Job;

final class JobController extends Controller {
    public function index(): void {
        $jobs = Job::active();
        $this->view('jobs/index', [
            'jobs'=>$jobs,
            'title'=>'Current Openings - Netedge Technology',
            'description'=>'Explore current job openings at Netedge Technology.'
        ]);
    }

    public function show(string $slug): void {
        $job = Job::findActiveBySlug($slug);
        if (!$job) {
            http_response_code(404);
            (new PageController())->notFound();
            return;
        }

        $this->view('jobs/show', [
            'job'=>$job,
            'title'=>$job['title'].' - Careers at Netedge Technology',
            'description'=>$job['short_description'] ?: 'Apply for '.$job['title'].' at Netedge Technology.'
        ]);
    }

    public function apply(string $slug): void {
        verify_csrf();
        $job = Job::findActiveBySlug($slug);
        if (!$job) {
            http_response_code(404);
            exit('Job not found');
        }

        if (!empty($_POST['website'])) {
            header('Location: '.url('jobs/'.$slug).'?sent=1');
            exit;
        }

        $name=trim((string)($_POST['name'] ?? ''));
        $email=trim((string)($_POST['email'] ?? ''));
        $phone=trim((string)($_POST['phone'] ?? ''));
        $experience=trim((string)($_POST['experience'] ?? ''));
        $message=trim((string)($_POST['message'] ?? ''));

        if ($name==='' || !filter_var($email,FILTER_VALIDATE_EMAIL) || $phone==='') {
            $_SESSION['flash_error']='Please fill required fields correctly.';
            header('Location: '.url('jobs/'.$slug));
            exit;
        }

        $resumePath = null;
        if (!empty($_FILES['resume']['name'])) {
            $resumePath = $this->handleResumeUpload($_FILES['resume']);
            if (!$resumePath) {
                $_SESSION['flash_error']='Resume must be PDF, DOC or DOCX and less than 3MB.';
                header('Location: '.url('jobs/'.$slug));
                exit;
            }
        }

        Job::apply((int)$job['id'], [
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'experience'=>$experience,
            'message'=>$message,
            'resume_path'=>$resumePath,
        ]);

        $_SESSION['flash_success']='Your application has been submitted successfully.';
        header('Location: '.url('jobs/'.$slug).'?sent=1');
        exit;
    }

    private function handleResumeUpload(array $file): ?string {
        if (($file['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) return null;
        if (($file['size'] ?? 0) > 3 * 1024 * 1024) return null;

        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, ['pdf','doc','docx'], true)) return null;

        $allowed = [
            'pdf'=>'application/pdf',
            'doc'=>'application/msword',
            'docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ];

        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($file['tmp_name']);
        if (!in_array($mime, $allowed, true) && $ext !== 'docx') return null;

        $dir = BASE_PATH . '/public/uploads/resumes/' . date('Y/m');
        if (!is_dir($dir)) mkdir($dir, 0755, true);

        $safe = bin2hex(random_bytes(16)) . '.' . $ext;
        $target = $dir . '/' . $safe;
        if (!move_uploaded_file($file['tmp_name'], $target)) return null;

        return 'uploads/resumes/' . date('Y/m') . '/' . $safe;
    }
}
