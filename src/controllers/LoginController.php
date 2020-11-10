<?php

namespace src\controllers;

require_once(__DIR__.'/../services/MarketService.php');

use src\services\MarketService;

class LoginController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);



        // the template path is the relative file path from `templates/`
        $twig->display('login.html.twig', [
            'test' => 'test',
            'notifications' => "notification",
        ]);
    }

    public function login()
    {
        echo "hello";
    }
}


?>