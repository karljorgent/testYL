<?php

namespace App\Service;

class RandomStringGenerator
{
    public function generate(int $length): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charLength - 1)];
        }

        return $randomString;
    }
}