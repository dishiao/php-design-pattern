<?php

class Order {
    public function buy() {
        //购买成功过后
        $subject = new HandleSubject();
        $subject->setUserId(10);
        $subject->attach(new SendEmailObserver());
        $subject->attach(new SendSmsObserver());

        $subject->notify();
    }

    public function buyV2()
    {

    }
}

spl_autoload_register(function($class) {
    include './'.$class.'.php';
});

$order = new Order();
$order->buy();