<?php

namespace App\Security;

class Impersonation
{
    public static function isAllowed(array $user): bool
    {
        return $user['role'] === 'admin';
    }
}
