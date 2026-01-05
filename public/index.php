<?php
declare(strict_types=1);
define('BASE_URL', '/PHP-POO-E-commerce/public');


require_once __DIR__ . '/../vendor/autoload.php';

use GamerHouse\App;

$app = new App(dirname(__DIR__));
$app->run();

?>