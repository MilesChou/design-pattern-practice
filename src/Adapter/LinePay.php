<?php

namespace MilesChou\DesignPatternPractice\Adapter;

use MilesChou\DesignPatternPractice\Adapter\Adaptee;

class LinePay implements PayDriverInterface
{
    public function pay(int $amount)
    {
        $adaptee = new Adaptee\LinePay();

        $adaptee->checkout($amount);
    }
}
