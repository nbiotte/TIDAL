<?php
/**
 * ProductsRepository.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\repositories;

/**
 * ProductsRepository.
 *
 * This class allows exchanges with the table products.
 * 
 */
class ProductsRepository extends Repository{

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
        return ($this->request('products', $columns, $conditions));
    }
}

?>