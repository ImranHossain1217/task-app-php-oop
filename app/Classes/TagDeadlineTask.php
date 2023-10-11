<?php
namespace app\Classes;

use app\Traits\HasTagTrait;
use app\Classes\DeadlineTask;
use app\Traits\HasAssigneTrait;

class TagDeadlineTask extends DeadlineTask
{
    use HasTagTrait, HasAssigneTrait;
}