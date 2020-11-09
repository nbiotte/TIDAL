<?php

namespace repositories;

use \PDO;

class Repository{
    protected static PDO $pdo;

    public function __construct(){
        if(!isset(self::$pdo)) self::$pdo = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint",  "aR7RIRZbiUZw3dYk");
    }

    public function select($sql){
        return $sql;
    }

    public function where($sql){
        return $sql;
    }

}

?>