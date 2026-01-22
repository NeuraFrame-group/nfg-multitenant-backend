<?php

namespace App;

class Router
{
    public static function dispatch(): void
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        // Exemple simple de routage
        if ($uri === '/api/example' && $method === 'GET') {
            require __DIR__ . '/../api/example_endpoint.php';
            return;
        }

        http_response_code(404);
        echo json_encode(['error' => 'Route not found']);
    }
}
