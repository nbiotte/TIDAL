<?php
/**
 * CustomerRepository.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\repositories;

/**
 * CustomersRepository.
 *
 * This class allows exchanges with the table customers.
 * 
 */
class CustomersRepository extends Repository{

    /**
     * getCustomer.
     *
     * Function that allows to get the customer who tries to connect.
     * 
     * @param array                                 $columns
     * @param array                                 $conditions
     *
     * @return string result of the SQL request
     */
    public function getCustomer($columns=null, $conditions=null){
        return ($this->request('customers', $columns, $conditions));
    }
}

?>