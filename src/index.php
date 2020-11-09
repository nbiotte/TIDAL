<?php

use src\controllers\ListController;
use src\repositories\ProductRepository;

session_start();

ini_set('diplay_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../vendor/autoload.php');
require_once('./controllers/ListController.php');
require_once('./repositories/ProductRepository.php');


new ListController();
//(new ProductRepository())->test();
//echo("Ça marche !!!");