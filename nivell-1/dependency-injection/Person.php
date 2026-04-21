<?php

class Person
{
    private array $objects;

    public function __construct(array $objects)
    {
        foreach ($objects as $object) {
            if (
                !$object instanceof Wallet &&
                !$object instanceof Key &&
                !$object instanceof PublicTransportCard &&
                !$object instanceof Smartphone
            ) {
                throw new InvalidArgumentException(
                    "Invalid object in Person"
                );
            }
        }

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
