<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\RandomStringGenerator;

class RandomStringGeneratorTest extends TestCase
{
    public function testGenerate()
    {
        $generator = new RandomStringGenerator();
        $result = $generator->generate(10);

        $this->assertEquals(10, strlen($result));
        $this->assertMatchesRegularExpression('/^[a-z0-9]+$/', $result);
    }
}