<?php

require_once __DIR__ . '/BMWCouponGenerator.php';
require_once __DIR__ . '/MercedesCouponGenerator.php';
require_once __DIR__ . '/CarCouponGenerator.php';

class Strategy
{
    private CarCouponGenerator $strategy;

    public function __construct(CarCouponGenerator $strategy)
    {
        $this->strategy = $strategy;
    }

    public function sort(): string
    {
        return $this->strategy->generateCoupon();
    }
}
