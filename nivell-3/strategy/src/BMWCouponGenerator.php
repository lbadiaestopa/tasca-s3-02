<?php

require_once __DIR__ . '/CarCouponGenerator.php';

class BMWCouponGenerator implements CarCouponGenerator
{
    private int $discount = 0;
    private bool $isHighSeason;
    private bool $bigStock;

    public function __construct(bool $isHighSeason, bool $bigStock)
    {
        $this->isHighSeason = $isHighSeason;
        $this->bigStock = $bigStock;
    }

    public function addSeasonDiscount(): void
    {
        if (!$this->isHighSeason) {
            $this->discount += 5;
        }
    }

    public function addStockDiscount(): void
    {
        if ($this->bigStock) {
            $this->discount += 7;
        }
    }

    public function generateCoupon(): string
    {
        $this->addSeasonDiscount();
        $this->addStockDiscount();
        return "Get {$this->discount}% off the price of your new car.";
    }
}
