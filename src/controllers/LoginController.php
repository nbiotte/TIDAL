<?php

namespace src\controllers;

class LoginController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);


        //$result = $service->getBasket();

        // the template path is the relative file path from `templates/`
        $twig->display('login.html.twig', [
            'test' => 'test',
            'notifications' => "notification",
        ]);
    }
}


?>