<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Wallet.php';
require_once __DIR__ . '/Key.php';
require_once __DIR__ . '/PublicTransportCard.php';
require_once __DIR__ . '/Smartphone.php';

$person = new Person([new Wallet('leather'), new Key('house'), new Key('car'), new PublicTransportCard(), new Smartphone()]);

$person->checkObjects();
