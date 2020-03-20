<?php

namespace MilesChou\DesignPatternPractice\Adapter;

interface PayDriverInterface
{
    public function pay(int $amount);
}
