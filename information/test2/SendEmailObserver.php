<?php


class SendEmailObserver implements \SplObserver
{

    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        $userId = $subject->getUserId();
        echo "发邮件".$userId."\n";
    }
}