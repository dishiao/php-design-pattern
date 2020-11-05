<?php

abstract class BaseObserver implements \SplObserver
{
    abstract public function update(SplSubject $subject);

    protected function getClass($classId)
    {
        if (empty($classId)) {
            return false;
        }
        return true;
    }
}