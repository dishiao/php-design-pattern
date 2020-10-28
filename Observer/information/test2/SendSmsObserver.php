<?php


class SendSmsObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        echo "发送手机短信\n";

    }

}