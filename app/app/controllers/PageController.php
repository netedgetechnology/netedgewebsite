<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Page;
use App\Models\ContentBlocks;

final class PageController extends Controller {
    public function home(): void {
        $page = Page::findEnabledBySlug('home');
        $this->view('pages/home', [
            'page' => $page,
            'title' => $page['meta_title'] ?? 'Netedge Technology - Server Management & IT Infrastructure Experts',
            'description' => $page['meta_description'] ?? 'Professional server management, cloud infrastructure, technical support and software development services.',
            'achievements' => ContentBlocks::achievements(),
            'testimonials' => ContentBlocks::testimonials(),
            'portfolio' => ContentBlocks::portfolio(),
        ]);
    }

    public function show(string $slug): void {
        $page = Page::findEnabledBySlug($slug);
        if (!$page) {
            http_response_code(404);
            $this->notFound();
            return;
        }

        $this->view('pages/show', [
            'page' => $page,
            'title' => $page['meta_title'] ?: $page['title'],
            'description' => $page['meta_description'] ?: $page['short_description'],
            'achievements' => ContentBlocks::achievements(),
            'testimonials' => ContentBlocks::testimonials(),
            'portfolio' => ContentBlocks::portfolio(),
        ]);
    }

    public function staticPage(string $view, string $title, string $description): void {
        $this->view('pages/' . $view, ['title'=>$title . ' | Netedge Technology', 'description'=>$description]);
    }

    public function privacyPolicy(): void {
        $this->view('pages/privacy-policy', [
            'title' => 'Privacy Policy | Netedge Technology',
            'description' => 'Privacy Policy for Netedge Technology website and inquiries.',
        ]);
    }

    public function terms(): void {
        $this->view('pages/terms', [
            'title' => 'Terms | Netedge Technology',
            'description' => 'Terms and conditions for Netedge Technology website and services.',
        ]);
    }

    public function notFound(): void {
        $this->view('errors/404', [
            'title' => 'Page Not Found - Netedge Technology',
            'description' => 'The page you are looking for could not be found.',
        ]);
    }
}
