<?php


namespace MilesChou\DesignPatternPractice\Adapter\Adaptee;

class ApplePay
{
    public function faceId()
    {
        echo '呼叫 Apple Pay FaceID API' . PHP_EOL;
    }

    public function send(int $amount)
    {
        echo '呼叫 Apple Pay 金流提供的結帳 API，扣 ' . $amount . PHP_EOL;
    }
}
