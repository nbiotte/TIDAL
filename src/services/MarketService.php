<?php

namespace src\services;

require_once(__DIR__.'/Service.php');

use src\services\Service;

class MarketService extends Service{

    public function __construct(){
        Service::__construct();
    }

    public function getProducts(){
        return $this->productRepository->getProducts();
    }
}


?>