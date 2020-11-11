<?php
/**
 * LoginController.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\controllers;

use src\services\ConnexionService;

/**
 * LoginController.
 *
 * This class ensures the display of login.hmtl.twig
 * 
 */
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

    /**
     * login.
     *
     * Function that allows to find the customer who tries to connect and connect him if it's the right id.
     * 
     */
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