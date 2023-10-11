<?php
namespace app\Classes;

abstract class Task
{
    protected $title;
    protected $description;
    protected $completed;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    abstract public function priority();
    abstract public function markAsComplete();

    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
}

?>