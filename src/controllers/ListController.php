<?php

namespace src\controllers;

class ListController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        // the template path is the relative file path from `templates/`
        $twig->display('base.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => "user firstname",
            'notifications' => "notification",
        ]);
    }
}


?>