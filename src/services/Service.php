<?php

namespace src\services;

require_once(__DIR__.'/../repositories/ProductRepository.php');

use src\repositories\ProductRepository;

class Service{

    protected ProductRepository $productRepository;

    public function __construct(){
        if(!isset($this->productRepository)) $this->productRepository = new ProductRepository();
    }

}


?>