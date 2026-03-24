<?php

class Dishwasher
{
    public function soap(): void
    {
        echo "Soaping 🧼" . PHP_EOL;
    }

    public function rinse(): void
    {
        echo "Rinsing 💦" . PHP_EOL;
    }

    public function dry(): void
    {
        echo "Drying 🌪️" . PHP_EOL;
    }

    public function finish(): void
    {
        echo "Biiiiip! 🚨";
    }
}
