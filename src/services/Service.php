<?php
/**
 * Service.php.
 *
 * @author BIOTTE Nathan / GUINGAND Jules
 *
 * @version 1.0
 */
namespace src\services;


use src\repositories\ProductsRepository;
use src\repositories\BasketRepository;
use src\repositories\CustomersRepository;

/**
 * Service.
 *
 * This class allows the creation of singloton for the different repositories.
 * 
 */
class Service{

    protected ProductsRepository $productsRepository;
    protected BasketRepository $basketRepository;
    protected CustomersRepository $customersRepository;

    public function __construct(){
        if(!isset($this->productsRepository)) $this->productsRepository = new ProductsRepository();
        if(!isset($this->basketRepository)) $this->basketRepository = new BasketRepository();
        if(!isset($this->customersRepository)) $this->customersRepository = new CustomersRepository();
    }

}


?>