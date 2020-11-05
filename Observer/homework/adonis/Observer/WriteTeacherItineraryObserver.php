<?php

class WriteTeacherItineraryObserver extends BaseObserver
{
    public function update(SplSubject $subject)
    {
        echo '课程id' . $subject->getClassId() . ' 的开班计划写入教师行程'.PHP_EOL;
    }
}