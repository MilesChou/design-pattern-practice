<?php

namespace MilesChou\Template\Adapter;

use MilesChou\Template\Adapter\Adaptee;

class LinePay implements PayDriverInterface
{
    public function pay(int $amount)
    {
        $adaptee = new Adaptee\LinePay();

        $adaptee->checkout($amount);
    }
}
