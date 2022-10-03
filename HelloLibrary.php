<?php

require_once __DIR__ . '/vendor/autoload.php';
use Matt\PhpComposerHello\Customer;

$customer = new Customer("Rachmat");
echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Budi") . PHP_EOL;