<?php

namespace GamerHouse;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App
{
    public function run(ServerRequestInterface $request): ResponseInterface {
       $uri = $_SERVER['REQUEST_URI'];
       if (!empty($uri) && $uri[-1] === "/") {
           header('Location:' . substr($uri,0,-1));
           header('HTTP/1.1 301 Moved Permanently');
           exit();
       }
       
        echo "Welcome to GamerHouse!";
    }
}