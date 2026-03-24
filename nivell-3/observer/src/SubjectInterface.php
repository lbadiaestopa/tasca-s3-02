<?php

interface SubjectInterface 
{
    public function attach(ObserverInterface $observer): void;
    public function detach(ObserverInterface $observer): void;
    public function addSubmission(Submission $submission): void;
    public function notify(Submission $submission): void;
}
