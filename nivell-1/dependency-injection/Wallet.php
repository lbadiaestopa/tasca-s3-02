<?php

class Wallet
{
    private string $style;

    public function __construct(string $style)
    {
        $this->style = $style;
    }

    public function __toString()
    {
        return $this->style . ' wallet';
    }
}
