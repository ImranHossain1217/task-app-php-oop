<?php
namespace app\Classes;

use app\Classes\Task;
use app\Interfaces\HasEndDateInterface;
use app\Interfaces\HasStartDateInterface;
use app\Traits\HasAssigneTrait;

class DeadlineTask extends Task implements HasEndDateInterface, HasStartDateInterface
{
    use HasAssigneTrait;
    protected $startDate;
    protected $endDate;

    public function __construct($title, $description, $startDate, $endDate)
    {
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function priority()
    {
        return "High";
    }

    public function markAsComplete()
    {
        $this->completed = true;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }
}