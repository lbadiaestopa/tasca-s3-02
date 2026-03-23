<?php

class Key
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type . ' keys';
    }
}
