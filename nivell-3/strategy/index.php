<?php

require_once __DIR__ . '/src/BMWCouponGenerator.php';
require_once __DIR__ . '/src/MercedesCouponGenerator.php';
require_once __DIR__ . '/src/CarCouponGenerator.php';
require_once __DIR__ . '/src/Strategy.php';

$bmwCoupon = new Strategy(new BMWCouponGenerator(false, true));
$mercedesCoupon = new Strategy(new MercedesCouponGenerator(false, true));

echo $bmwCoupon->sort() . PHP_EOL;
echo $mercedesCoupon->sort();
