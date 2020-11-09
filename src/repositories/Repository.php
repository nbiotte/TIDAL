<?php

namespace src\repositories;

use \PDO;

class Repository{
    protected static PDO $pdo;

    public function __construct(){
        if(!isset(self::$pdo)) {
            try{
            self::$pdo = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint",  "aR7RIRZbiUZw3dYk");
            } catch (Exception $e) {
                echo "Problème de connexion à la base de donnée !";
            }
        }
    }

    public function select($sql){
        return $sql;
    }

    public function where($sql){
        return $sql;
    }

}

?>