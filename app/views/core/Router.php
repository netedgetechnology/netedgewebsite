<?php
declare(strict_types=1);

namespace App\Core;

final class Router {
    private array $routes = [];

    public function get(string $path, $handler): void {
        $this->routes['GET'][] = [$path, $handler];
    }

    public function post(string $path, $handler): void {
        $this->routes['POST'][] = [$path, $handler];
    }

    public function dispatch(string $method, string $uri): void {
        $uri = '/' . trim($uri, '/');
        if ($uri !== '/') $uri = rtrim($uri, '/');

        foreach ($this->routes[$method] ?? [] as [$path, $handler]) {
            $pattern = preg_replace('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', '(?P<$1>[^/]+)', $path);
            $pattern = '#^' . rtrim($pattern, '/') . '$#';
            if ($path === '/') $pattern = '#^/$#';

            if (preg_match($pattern, $uri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                if (is_array($handler)) {
                    [$class, $methodName] = $handler;
                    (new $class())->$methodName(...array_values($params));
                    return;
                }
                $handler(...array_values($params));
                return;
            }
        }

        http_response_code(404);
        (new \App\Controllers\PageController())->notFound();
    }
}
