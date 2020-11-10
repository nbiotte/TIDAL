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
require_once(__DIR__.'/../repositories/BasketRepository.php');

use src\repositories\ProductRepository;
use src\repositories\BasketRepository;

/**
 * Service.
 *
 * This class allows the creation of singloton for the different repositories.
 * 
 */
class Service{

    protected ProductRepository $productRepository;
    protected BasketRepository $basketRepository;

    public function __construct(){
        if(!isset($this->productRepository)) $this->productRepository = new ProductRepository();
        if(!isset($this->basketRepository)) $this->basketRepository = new BasketRepository();
    }

}


?>