<?php

namespace src\controllers;

use src\services\ConnexionService;

class MembreController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        // the template path is the relative file path from `templates/`
        $twig->display('membre.html.twig', [
            'customerId' => $_SESSION["id"],
            'customerFirstname' => $_SESSION["firstname"],
        ]);

    }
}


?>