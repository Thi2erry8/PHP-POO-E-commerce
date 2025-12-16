<?php
declare(strict_types=1);


require_once __DIR__ . '/./vendor/autoload.php';

use GamerHouse\Controllers\HomeController;

$controller = new HomeController();
$controller->index();