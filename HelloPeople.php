<?php

use Matt\Data\People;

require_once __DIR__ . '/vendor/autoload.php';

$people = new People("Eko");

echo $people->sayHello("Budi") . PHP_EOL;