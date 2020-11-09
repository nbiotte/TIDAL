<?php

namespace src\repositories;

use \PDO;

require_once(__DIR__ ."/Repository.php");

class ProductRepository extends Repository{

    public function getProducts(){
        $sql = 'SELECT * FROM Products';
        $sth = self::$pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $resultat = $sth->fetchAll();
        return $resultat;
    }
}

?>