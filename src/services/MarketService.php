<?php
/**
 * MarketService.php.
 *
 * @author BIOTTE Nathan / GUINGAND Jules
 *
 * @version 1.0
 */
namespace src\services;

use src\services\Service;

/**
 * MarketService.
 *
 * This class allows exchanges whith the different repositories and managers use for the market.
 * 
 */
class MarketService extends Service{

    public function __construct(){
        Service::__construct();
    }

    /**
     * getProducts.
     *
     * Function that allows to get products list in the DB.
     * 
     * @param array                                 $columns
     * @param array                                 $conditions
     *
     * @return string result of the SQL request
     */
    public function getProducts($columns=null, $conditions=null){
        return $this->productsRepository->getProducts($columns, $conditions);
    }

    /**
     * getBasket.
     *
     * Function that allows to get basket list in the DB.
     * 
     * @param array                                 $columns
     * @param array                                 $conditions
     *
     * @return string result of the SQL request
     */
    public function getBasket($columns=null, $conditions=null){
        return $this->basketRepository->getBasket($columns, $conditions);
    }
}


?>