<?php
declare(strict_types=1);

namespace App\Core;

class Controller {
    protected function view(string $view, array $data = []): void {
        extract($data, EXTR_SKIP);
        require APP_PATH . '/views/layout.php';
    }
}
