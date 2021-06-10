<?php

require 'functions.php';

class Task
{
    public $description;

    public $completed = false;

    public function __construct($description)
    { // work on the initiation of Task

        $this->description = $description;

    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}

$tasks = [new Task('This is a task'),
    new Task('This is the second task'),
    new Task('This is the third task'),
];

$tasks[0]->complete();

require 'index.view.php';
