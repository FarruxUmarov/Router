<?php

declare(strict_types=1);

require "vender/composer/autoload.php";

$router = new Router();

if ($router->isApiCall()){
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        if ($router->getREsourceTd()) {
            
        }
    }
}