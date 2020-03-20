<?php

namespace MilesChou\Template\Adapter;

use MilesChou\Template\Adapter\Adaptee;

class ApplePay implements PayDriverInterface
{
    public function pay(int $amount)
    {
        $adaptee = new Adaptee\ApplePay();

        $adaptee->faceId();
        $adaptee->checkout($amount);
    }
}
