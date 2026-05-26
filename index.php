<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Netedge front controller bridge
|--------------------------------------------------------------------------
| Domain document root remains /home/netedge/public_html.
| The actual application front controller stays in /public.
*/

$publicIndex = __DIR__ . '/public/index.php';

if (!is_file($publicIndex)) {
    http_response_code(500);
    echo 'Application front controller not found.';
    exit;
}

require $publicIndex;
