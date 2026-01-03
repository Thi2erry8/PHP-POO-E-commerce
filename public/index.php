<?php
declare(strict_types=1);


require_once __DIR__ . '/../vendor/autoload.php';

use App\App;

$app = new App(dirname(__DIR__));
$app->run();

?>