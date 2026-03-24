<?php

require_once __DIR__ . '/src/Moodle.php';
require_once __DIR__ . '/src/Mentor.php';
require_once __DIR__ . '/src/Submission.php';
require_once __DIR__ . '/src/SubjectInterface.php';
require_once __DIR__ . '/src/ObserverInterface.php';

$moodle = new Moodle();
$mentor = new Mentor('Rubén');
$submission = new Submission('Tasca-s3-02', 'Lluc');

$moodle->attach($mentor);
$moodle->notify($submission);