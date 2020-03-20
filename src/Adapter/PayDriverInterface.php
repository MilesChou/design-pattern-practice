<?php

namespace MilesChou\Template\Adapter;

interface PayDriverInterface
{
    public function pay(int $amount);
}
