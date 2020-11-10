<?php
/**
 * ConnexionService.php.
 *
 * @author BIOTTE Nathan / GUINGAND Jules
 *
 * @version 1.0
 */
namespace src\services;

use src\services\Service;

/**
 * ConnexionService.
 *
 * This class allows exchanges whith the different repositories and managers use for the market.
 * 
 */
class ConnexionService extends Service{

    public function __construct(){
        Service::__construct();
    }

    /**
     * getCustomer.
     *
     * Function that allows to get customers list in the DB.
     * 
     * @param array                                 $columns
     * @param array                                 $conditions
     *
     * @return string result of the SQL request
     */
    public function getCustomer($columns=null, $conditions=null){
        return $this->customersRepository->getCustomer($columns, $conditions);
    }

}


?>