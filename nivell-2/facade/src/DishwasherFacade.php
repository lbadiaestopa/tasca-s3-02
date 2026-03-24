<?php

require_once __DIR__ . '/Dishwasher.php';

class DishwasherFacade
{
    private Dishwasher $dishwasher;

    public function __construct(Dishwasher $dishwasher)
    {
        $this->dishwasher = $dishwasher;
    }

    public function wash(): void
    {
        $this->dishwasher->soap();
        $this->dishwasher->rinse();
        $this->dishwasher->dry();
        $this->dishwasher->finish();
    }
}
