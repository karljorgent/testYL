<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Service\RandomStringGenerator;
use App\Service\RandomArrayGenerator;
use App\Service\Rot13Encoder;

$stringGenerator = new RandomStringGenerator();
$arrayGenerator = new RandomArrayGenerator($stringGenerator);
$rot13Encoder = new Rot13Encoder();

// Generating random string
$randomString = $stringGenerator->generate(10);
echo "Random String: $randomString" . PHP_EOL;

// Generating random array
$randomArray = $arrayGenerator->generate(3, 10);
echo "Random Array:" . PHP_EOL;
print_r($randomArray);

// Encoding random string and array with rot13
$encodedString = $rot13Encoder->encode($randomString);
$encodedArray = $rot13Encoder->encodeArray($randomArray);

echo "Encoded String: $encodedString" . PHP_EOL;
echo "Encoded Array:" . PHP_EOL;
print_r($encodedArray);