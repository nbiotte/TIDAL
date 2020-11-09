<?php

use src\controllers\ListController;
use repositories\ProductRepository;

session_start();

ini_set('diplay_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require('../vendor/autoload.php');
require('./controllers/ListController.php');
require('./repositories/ProductRepository.php');

/*try {
    $bdd = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint",  "aR7RIRZbiUZw3dYk");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée !";
    die();
}*/

//new ListController();
(new ProductRepository())->getProduct();

//echo("Ça marche !!!");