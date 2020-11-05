<?php

class Subject implements \SplSubject
{
    private $observer;
    protected $classId;

    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->observer->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observer->detach($observer);
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        foreach ($this->observer as $value) {
            $value->update($this);
        }
    }

    public function getClassId()
    {
        if (!empty($this->classId)) {
            return $this->classId;
        }
        return 0;
    }

    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    /**
     * @return SplObjectStorage
     */
    public function getObserver()
    {
        return $this->observer;
    }

    /**
     * @param SplObjectStorage $observer
     */
    public function setObserver($observer)
    {
        $this->observer = $observer;
    }
}