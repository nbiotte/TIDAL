<?php

use src\controllers\ListController;
use src\controllers\LoginController;
use src\controllers\MemberController;
use src\controllers\BasketController;

session_start();
if (!isset($_SESSION["id"])) $_SESSION["id"] = 0;

ini_set('diplay_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../vendor/autoload.php');


if(!isset($_GET['page'])) new ListController();
elseif ($_GET['page']==='connect') new LoginController();
elseif ($_GET['page']==='member') new MemberController();
elseif ($_GET['page']==='basket') new BasketController();
elseif ($_GET['page']==='disconnect'){
    session_destroy(); 
    header("Location: /");
} 

?>