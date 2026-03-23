<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Wallet.php';
require_once __DIR__ . '/Key.php';
require_once __DIR__ . '/PublicTransportCard.php';
require_once __DIR__ . '/Smartphone.php';

$leatherWallet = new Wallet('leather');
$houseKey = new Key('house');
$carKey = new Key('car');
$publicTransportCard = new PublicTransportCard();
$smartphone = new Smartphone();

$person = new Person([$leatherWallet, $houseKey, $carKey, $publicTransportCard, $smartphone]);

$person->checkObjects();
