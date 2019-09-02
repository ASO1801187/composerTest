<?php
require_once 'vendor/autoload.php';

$factory = new RandomLib\Factory;
$generator = $factory->getMediumStrengthGenerator();

$randomInt = $generator->generateInt(5, 15);
echo $randomInt;

echo "\n";

$randomString = $generator->generateString(32, 'abcdef');
echo $randomString;
?>