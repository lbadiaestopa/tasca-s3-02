<?php

interface ObserverInterface
{
    public function update(Submission $moodleSubmission): void;
}
