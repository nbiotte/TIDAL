<?php
/**
 * BasketRepository.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\repositories;

/**
 * BasketRepository.
 *
 * This class allows exchanges with the table basket.
 * 
 */
class BasketRepository extends Repository{

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
        return ($this->request('basket', $columns, $conditions));
    }
}

?>