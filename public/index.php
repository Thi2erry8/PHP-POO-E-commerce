<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GamerHouse\Controllers\HomeController;

$controller = new HomeController();
$controller->index();