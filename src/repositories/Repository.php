<?php
/**
 * Repository.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\repositories;

use \PDO;

/**
 * Repository.
 *
 * This class allows the connection to the DB and the creation of basics SQL requests.
 * 
 */

class Repository{

    protected static PDO $pdo;

    public function __construct(){
        if(!isset(self::$pdo)) {
            try{
                self::$pdo = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint",  "aR7RIRZbiUZw3dYk");
            } catch (Exception $e) {
                echo("Problème de connexion à la base de donnée !");
            }
        }
    }

    /**
     * select.
     *
     * Function that create the select part of SQL request.
     * 
     * @param array                                 $columns
     *
     * @return string SQL request
     */
    private function select($columns=null){
        if(isset($columns)) $sql = 'SELECT '. implode(', ',$columns);
        else $sql = 'SELECT *';
        return $sql;
    }

    /**
     * where.
     *
     * Function that create the where part of SQL request.
     * 
     * @param string                                $sql
     * @param array                                 $conditions
     *
     * @return string SQL request
     */
    private function where($sql, $conditions){
        $sql = $sql. " WHERE ";
        $count=1;
        foreach($conditions as $condition){
            $sql = $sql."".$condition;
            if($count != count($conditions)) $sql = $sql." AND ";
            $count++;
        }
        return $sql;
    }

    /**
     * request.
     *
     * Function that create the from part of SQL request and which sends it.
     * 
     * @param string                                $table
     * @param array                                 $columns
     * @param array                                 $conditions
     *
     * @return string result of the SQL request
     */
    protected function request($table, $columns=null, $conditions=null){
        $sql = $this->select($columns);
        $sql = $sql. " FROM ".$table;
        if (isset($conditions)) $sql = $this->where($sql, $conditions); 
        print_r($sql);
        $sth = self::$pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $resultat = $sth->fetchAll();
        return $resultat;
    }

}

?>