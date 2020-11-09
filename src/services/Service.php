<?php
/**
 * Service.php.
 *
 * @author BIOTTE Nathan / GUINGAND Jules
 *
 * @version 1.0
 */
namespace src\services;

require_once(__DIR__.'/../repositories/ProductRepository.php');

use src\repositories\ProductRepository;

/**
 * Service.
 *
 * This class allows the creation of singloton for the different repositories.
 * 
 */
class Service{

    protected ProductRepository $productRepository;

    public function __construct(){
        if(!isset($this->productRepository)) $this->productRepository = new ProductRepository();
    }

}


?>