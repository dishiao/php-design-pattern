<?php


class HandleSubject implements \SplSubject
{
    protected $observers;
    protected $userId;

    public function __construct()
    {
        $this->observers = new  \SplObjectStorage();
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observers->detach($observer);
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }

    }

}