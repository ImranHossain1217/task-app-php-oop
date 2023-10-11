<?php
use app\Classes\DeadlineTask;
use app\Classes\TagDeadlineTask;

include 'autoloader.php';

$task1 = new DeadlineTask('Task 1', 'Should be done within Thursday', '2023-10-11', '2023-10-13');
$task1->addAssigne("Rakibul");
$task1->addAssigne("Ruslan");

$task2 = new TagDeadlineTask('Task 2', 'Should be done within Thursday', '2023-13-11', '2023-10-15');
$task2->addTag('Frontend');
$task2->addTag('Backend');
$task2->addAssigne("Nazmul");
$task2->addAssigne("Sweety");
$task2->addAssigne("Imran");

$tasks = [$task1, $task2];

foreach ($tasks as $task) {
    echo "Task: " . $task->getTitle() . "<br>";
    echo "description: " . $task->getDescription() . "<br>";
    echo "start date: " . $task->getStartDate() . "<br>";
    echo "end date: " . $task->getEndDate() . "<br>";
    echo "priority: " . $task->priority() . "<br>";
    echo "assignes: " . implode(", ", $task->getAssignes()) . "<br>";
    if ($task instanceof TagDeadlineTask) {
        echo "tags: " . implode(", ", $task->getTags()) . "<br>";
    }
    echo "Completed: " . ($task->markAsComplete() ? "Yes" : "No") . "<br>";
    echo "<hr/>";

}