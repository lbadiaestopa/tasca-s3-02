<?php

require_once __DIR__ . '/SubjectInterface.php';

class Moodle implements SubjectInterface
{
    private array $observers = [];

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(Submission $submission): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($submission);
        }
    }
}