<?php

namespace App\Security;

class JWT
{
    public static function verify(string $token): array
    {
        // Exemple simplifié
        // En production : signature + expiration + audience
        return [
            'user_id'   => 1,
            'tenant_id' => 42,
            'role'      => 'admin'
        ];
    }
}
