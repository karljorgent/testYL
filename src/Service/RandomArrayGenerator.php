<?php

namespace App\Service;

class RandomArrayGenerator
{
    private $stringGenerator;

    public function __construct(RandomStringGenerator $stringGenerator)
    {
        $this->stringGenerator = $stringGenerator;
    }

    public function generate(int $count, int $length): array
    {
        $randomArray = [];

        for ($i = 0; $i < $count; $i++) {
            $randomArray[] = $this->stringGenerator->generate($length);
        }

        return $randomArray;
    }
}