<?php

declare(strict_types=1);

require_once __DIR__ . '/router.php';
require_once __DIR__ . '/jwt.php';
require_once __DIR__ . '/crypto.php';
require_once __DIR__ . '/impersonation.php';

// Configuration globale
date_default_timezone_set('Europe/Zurich');

// Headers API
header('Content-Type: application/json');

// Gestion erreurs basique
set_exception_handler(function ($e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Internal server error',
        'message' => $e->getMessage()
    ]);
});
