<?php

class ChangeStatusObserver extends BaseObserver
{
    public function update(SplSubject $subject)
    {
        echo '课程id' . $subject->getClassId() . ' 修改发布状态'.PHP_EOL;
    }
}