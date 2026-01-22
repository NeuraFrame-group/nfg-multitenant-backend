<?php

use App\Security\JWT;

$authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';
$token = str_replace('Bearer ', '', $authHeader);

$user = JWT::verify($token);

echo json_encode([
    'message' => 'Example API endpoint',
    'tenant'  => $user['tenant_id'],
    'user'    => $user['user_id']
]);
