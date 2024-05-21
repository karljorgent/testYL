<?php

namespace App\Service;

class Rot13Encoder
{
    public function encode(string $text): string
    {
        return str_rot13($text);
    }

    public function encodeArray(array $array): array
    {
        return array_map([$this, 'encode'], $array);
    }
}