<?php

class NotifyTeacherObserver extends BaseObserver
{
    protected $classId;

    public function update(SplSubject $subject)
    {
        $this->classId = $subject->getClassId();
        echo '课程id' . $this->classId . ' 通知教师'.PHP_EOL;
        echo $this->getClass($this->classId);
    }
}