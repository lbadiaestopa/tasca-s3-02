<?php

require_once __DIR__ . '/Tigger.php';

$tigger = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

function areEquals(Tigger $tigger, Tigger $tigger2)
{
    if ($tigger === $tigger2) {
        echo 'There is only one Tigger' . PHP_EOL;
    } else {
        echo 'The Tiggers are different' . PHP_EOL;
    }

}

$areEquals = areEquals($tigger, $tigger2);

$tigger->roar();
$tigger->roar();
$tigger->roar();

echo Tigger::getCounter();
