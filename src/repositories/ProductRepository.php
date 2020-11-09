<?php

namespace repositories;

use \PDO;

require(__DIR__ ."/Repository.php");

class ProductRepository extends Repository{

    public function getProduct(){
        //$pdo = $this->getPDO();
        $sql = 'SELECT * FROM Products';
        $sth = self::$pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $resultat = $sth->fetchAll();
        print_r($resultat);
    }
}

?>