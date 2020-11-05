<?php

class NotifyTeacherObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo '课程id' . $subject->getClassId() . ' 通知教师'.PHP_EOL;
    }
}