<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\AdminAuth;
use App\Models\AdminPage;
use App\Models\AdminJob;
use App\Models\Contact;
use App\Models\ContentBlocks;

require_once APP_PATH . '/models/AdminPage.php';
require_once APP_PATH . '/models/AdminJob.php';
require_once APP_PATH . '/models/Contact.php';
require_once APP_PATH . '/models/ContentBlocks.php';

final class AdminController {
    private function render(string $view, array $data = []): void {
        extract($data, EXTR_SKIP);
        require APP_PATH . '/views/admin/layout.php';
    }

    public function login(): void {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            verify_csrf();
            $email = trim((string)($_POST['email'] ?? ''));
            $password = (string)($_POST['password'] ?? '');

            if (AdminAuth::attempt($email, $password)) {
                header('Location: /admin/');
                exit;
            }
            $error = 'Invalid login details.';
        }

        $this->render('login', ['title'=>'Admin Login', 'error'=>$error ?? null, 'guest'=>true]);
    }

    public function logout(): void {
        AdminAuth::logout();
        header('Location: /admin/?action=login');
        exit;
    }

    public function dashboard(): void {
        AdminAuth::requireLogin();
        $pages = AdminPage::all();
        $this->render('dashboard', ['title'=>'Dashboard', 'pages'=>$pages]);
    }

    public function pages(): void {
        AdminAuth::requireLogin();
        $this->render('pages/index', ['title'=>'Pages', 'pages'=>AdminPage::all()]);
    }

    public function pageForm(int $id = 0): void {
        AdminAuth::requireLogin();
        $page = $id ? AdminPage::find($id) : null;
        $parents = array_filter(AdminPage::all(), fn($p) => (int)$p['id'] !== $id);
        $this->render('pages/form', ['title'=>$id?'Edit Page':'Create Page', 'page'=>$page, 'parents'=>$parents]);
    }

    public function pageSave(): void {
        AdminAuth::requireLogin();
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /admin/?action=pages');
            exit;
        }
        verify_csrf();

        $title = trim((string)($_POST['title'] ?? ''));
        $slug = trim((string)($_POST['slug'] ?? ''));
        $slug = strtolower(preg_replace('/[^a-z0-9\-]+/', '-', $slug));
        $slug = trim($slug, '-');

        if ($title === '' || $slug === '') {
            $_SESSION['flash_error'] = 'Title and slug are required.';
            header('Location: /admin/?action=pages');
            exit;
        }

        AdminPage::save($_POST);
        $_SESSION['flash_success'] = 'Page saved successfully.';
        header('Location: /admin/?action=pages');
        exit;
    }

    public function pageToggle(int $id): void {
        AdminAuth::requireLogin();
        if ($id > 0) AdminPage::toggleStatus($id);
        header('Location: /admin/?action=pages');
        exit;
    }

    public function jobs(): void {
        AdminAuth::requireLogin();
        $this->render('jobs/index', ['title'=>'Jobs', 'jobs'=>AdminJob::all()]);
    }

    public function jobForm(int $id = 0): void {
        AdminAuth::requireLogin();
        $job = $id ? AdminJob::find($id) : null;
        $this->render('jobs/form', ['title'=>$id?'Edit Job':'Create Job', 'job'=>$job]);
    }

    public function jobSave(): void {
        AdminAuth::requireLogin();
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /admin/?action=jobs');
            exit;
        }
        verify_csrf();

        $title = trim((string)($_POST['title'] ?? ''));
        $slug = trim((string)($_POST['slug'] ?? ''));
        $slug = strtolower(preg_replace('/[^a-z0-9\-]+/', '-', $slug));
        $slug = trim($slug, '-');
        $_POST['slug'] = $slug;

        if ($title === '' || $slug === '') {
            $_SESSION['flash_error'] = 'Title and slug are required.';
            header('Location: /admin/?action=jobs');
            exit;
        }

        AdminJob::save($_POST);
        $_SESSION['flash_success'] = 'Job saved successfully.';
        header('Location: /admin/?action=jobs');
        exit;
    }

    public function jobToggle(int $id): void {
        AdminAuth::requireLogin();
        if ($id > 0) AdminJob::toggleStatus($id);
        header('Location: /admin/?action=jobs');
        exit;
    }

    public function applications(): void {
        AdminAuth::requireLogin();
        $this->render('jobs/applications', ['title'=>'Applications', 'applications'=>AdminJob::applications()]);
    }


    public function enquiries(): void {
        AdminAuth::requireLogin();
        $this->render('enquiries/index', ['title'=>'Contact Enquiries', 'enquiries'=>Contact::all()]);
    }

    public function portfolio(): void {
        AdminAuth::requireLogin();
        $this->render('simple/list', ['title'=>'Portfolio', 'items'=>ContentBlocks::adminAll('portfolio_items'), 'columns'=>['title','description','status']]);
    }

    public function testimonials(): void {
        AdminAuth::requireLogin();
        $this->render('simple/list', ['title'=>'Testimonials', 'items'=>ContentBlocks::adminAll('testimonials'), 'columns'=>['client_name','client_company','message','status']]);
    }

    public function achievements(): void {
        AdminAuth::requireLogin();
        $this->render('simple/list', ['title'=>'Achievements', 'items'=>ContentBlocks::adminAll('achievements'), 'columns'=>['metric','label','status']]);
    }

}
