<?php

use src\controllers\ListController;
use src\controllers\LoginController;
use src\repositories\ProductRepository;

session_start();

ini_set('diplay_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../vendor/autoload.php');


if(!isset($_GET['page'])) new ListController();
elseif ($_GET['page']==='connexion') new LoginController();
