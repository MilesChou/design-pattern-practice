<?php

use MilesChou\DesignPatternPractice\Adapter\ApplePay;
use MilesChou\DesignPatternPractice\Adapter\LinePay;
use MilesChou\DesignPatternPractice\Adapter\PayDriverInterface;

require_once __DIR__ . '/../../vendor/autoload.php';

/** @var PayDriverInterface $adapter */
$adapter = new LinePay();

$adapter->pay(1000);

/** @var PayDriverInterface $adapter */
$adapter = new ApplePay();

$adapter->pay(1000);
