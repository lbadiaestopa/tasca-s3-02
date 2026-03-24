<?php

class Submission
{
    private string $taskName;
    private string $studentName;

    public function __construct(string $taskName, string $studentName)
    {
        $this->taskName = $taskName;
        $this->studentName = $studentName;
    }

    public function getTaskName(): string 
    {
        return $this->taskName;
    }

    public function getStudentName(): string
    {
        return $this->studentName;
    }

    public function __toString(): string
    {
        return "$this->taskName , $this->studentName";
    }
}