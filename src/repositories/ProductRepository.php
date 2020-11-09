<?php
/**
 * ProductRepository.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */


namespace src\repositories;

use \PDO;

require_once(__DIR__ ."/Repository.php");

/**
 * ProductRepository.
 *
 * This class allows exchanges with the table Products.
 * 
 */
class ProductRepository extends Repository{

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
    public function getProducts($columns, $conditions=null){
        return ($this->request('Products', $columns, $conditions));
    }
}

?>