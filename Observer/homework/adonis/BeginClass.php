<?php

class BeginClass{
    const OBSERVER = 'Observer';

    public function __construct()
    {
        spl_autoload_register(function ($class) {
            if (true == strstr($class, self::OBSERVER)) {
                require_once '.' . DIRECTORY_SEPARATOR . self::OBSERVER . DIRECTORY_SEPARATOR . $class . '.php';
            } else {
                require_once $class . '.php';
            }
        });
    }

    public function handle()
    {
        $sub = new Subject();
        // set 课程ID
        $sub->setClassId(10086);
        // 加入
        $sub->attach(new NotifyTeacherObserver());
        $sub->attach(new WriteTeacherItineraryObserver());
        $sub->attach(new ChangeStatusObserver());
        // 通知
        $sub->notify();
    }
}

$run = new BeginClass();
$run->handle();