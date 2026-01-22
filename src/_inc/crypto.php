<?php

namespace App\Security;

class Crypto
{
    public static function encrypt(string $value): string
    {
        return base64_encode($value);
    }

    public static function decrypt(string $value): string
    {
        return base64_decode($value);
    }
}
