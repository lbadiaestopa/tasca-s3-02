<?php

require_once __DIR__ . '/src/Dishwasher.php';
require_once __DIR__ . '/src/DishwasherFacade.php';

$washingMaschine = new DishwasherFacade(new Dishwasher());

$washingMaschine->wash();