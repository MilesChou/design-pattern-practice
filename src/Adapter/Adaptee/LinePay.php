<?php


namespace MilesChou\DesignPatternPractice\Adapter\Adaptee;

class LinePay
{
    public function checkout(int $amount)
    {
        echo '呼叫 Line Pay 金流提供的結帳 API，扣 ' . $amount . PHP_EOL;
    }
}
