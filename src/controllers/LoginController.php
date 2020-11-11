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
            'customerId' => $_SESSION["id"],
            'test' => 'test',
            'notifications' => "notification",
        ]);

    }


    private function login()
    {
        $data = $_POST;
        $connexionService = new ConnexionService();
        //print_r($_POST);
        $pwd = md5($data['pwd']);
        $customer = $connexionService->getCustomer(['id','firstname', 'familyname', 'address'], ["username = '".$data['username']."' AND password = '$pwd'" ]);
        if (!empty($customer)) {
            $_SESSION["id"]=$customer[0][0];
            $_SESSION["firstname"]=$customer[0][1];
            $_SESSION["familyname"]=$customer[0][2];
            $_SESSION["address"]=$customer[0][3];
        }
    }
}


?>