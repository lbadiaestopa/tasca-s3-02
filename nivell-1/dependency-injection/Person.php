<?php

class Person
{
    private array $objects;

    public function __construct(array $objects)
    {
        $this->objects = $objects;
    }

    public function checkObjects(): void
    {
        echo 'I have my ';
        foreach ($this->objects as $object) {
            echo $object . ', ';
        }
        echo "ready to go!";
    }
}
