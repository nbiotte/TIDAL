<?php

namespace src\controllers;

use src\services\ConnexionService;

class LoginController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        if(!empty($_POST)) $this->login();

        // the template path is the relative file path from `templates/`
        $twig->display('login.html.twig', [
            'test' => 'test',
            'notifications' => "notification",
        ]);

    }


    private function login()
    {
        $data = $_POST;
        $connexionService = new ConnexionService();
        $customer = $connexionService->getCustomer(['id'], ["username = '".$data['username']."'"]);
        if (!empty($customer)) $_SESSION["id"]=$customer[0][0];
    }
}


?>