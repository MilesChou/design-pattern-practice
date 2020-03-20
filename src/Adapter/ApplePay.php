<?php

namespace MilesChou\DesignPatternPractice\Adapter;

use MilesChou\DesignPatternPractice\Adapter\Adaptee;

class ApplePay implements PayDriverInterface
{
    public function pay(int $amount)
    {
        $adaptee = new Adaptee\ApplePay();

        $adaptee->faceId();
        $adaptee->checkout($amount);
    }
}
