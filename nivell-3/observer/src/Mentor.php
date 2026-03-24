<?php

require_once __DIR__ . '/ObserverInterface.php';
require_once __DIR__ . '/Submission.php';

class Mentor implements ObserverInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(Submission $moodleSubmission): void
    {
        echo "Hola, {$this->name}! Hi ha una nova entrega de {$moodleSubmission->getStudentName()}: {$moodleSubmission->getTaskName()}.";
    }
}