<?php

interface DuckInterface 
{
    function quack();
    function fly();
}
class Duck implements DuckInterface
{
    public function quack() {
        echo "Quack \n";
    }

    public function fly() {
        echo "I'm flying \n";
    }
}

class Turkey 
{
    public function gobble() {
        echo "Gobble gobble \n";
    }

    public function fly() {
       echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter implements DuckInterface
{
    protected $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack() {
        $this->turkey->gobble();
    }

    public function fly() {
        for ($i = 0; $i < 5; $i++) $this->turkey->fly();
    }
}