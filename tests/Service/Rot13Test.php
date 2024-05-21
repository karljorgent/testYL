<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\Rot13Encoder;

class Rot13Test extends TestCase
{
    public function testEncode()
    {
        $encoder = new Rot13Encoder();
        $result = $encoder->encode('test');
        $resultArray = $encoder->encodeArray(['test', 'test']);

        $this->assertEquals('grfg', $result);
        $this->assertEquals(['grfg', 'grfg'], $resultArray);
    }
}