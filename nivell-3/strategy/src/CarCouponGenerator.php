<?php

interface CarCouponGenerator
{
    public function addSeasonDiscount(): void;
    public function addStockDiscount(): void;
    public function generateCoupon(): string;
}
