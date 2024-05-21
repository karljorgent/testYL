<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\RandomArrayGenerator;
use App\Service\RandomStringGenerator;

class RandomArrayGeneratorTest extends TestCase
{
    public function testGenerate()
    {
        $stringGenerator = new RandomStringGenerator();
        $arrayGenerator = new RandomArrayGenerator($stringGenerator);
        $result = $arrayGenerator->generate(3, 10);

        $this->assertCount(3, $result);
        foreach ($result as $item) {
            $this->assertEquals(10, strlen($item));
            $this->assertMatchesRegularExpression('/^[a-z0-9]+$/', $item);
        }
    }
}