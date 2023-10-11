<?php
namespace app\Traits;

trait HasAssigneTrait
{
    protected $assignes = [];

    public function addAssigne($assigne)
    {
        $this->assignes[] = $assigne;
    }

    public function getAssignes()
    {
        return $this->assignes;
    }
}