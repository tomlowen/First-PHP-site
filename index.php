<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
};

$my_task = new Task("go to the shop");

$tasks = [
    new Task("sdg"),
    new Task("2dsgfj"),
    new Task("dfgjsdj"),
];

// dd($my_task->isComplete());
$tasks[0]->complete();

require "index.view.php";