<?php

class Tigger
{
    private static Tigger $instance;
    public static int $counter = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
        self::$counter++;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Tigger;
        }
        return self::$instance;
    }

    public static function getCounter(): int {
        return self::$counter;
    }
}
