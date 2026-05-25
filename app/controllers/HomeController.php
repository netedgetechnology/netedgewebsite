<?php
namespace App\Controllers;

class HomeController
{
    public function index(): void
    {
        $title = 'Netedge Technology | End-to-End IT Solutions for Your Business';
        $description = 'Netedge Technology provides server management, webhosting support, cloud infrastructure management, technical support, software development and staffing services.';

        $view = __DIR__ . '/../views/pages/home.php';

        if (!is_file($view)) {
            http_response_code(500);
            echo 'Homepage view not found.';
            return;
        }

        include __DIR__ . '/../views/layout.php';
    }
}
