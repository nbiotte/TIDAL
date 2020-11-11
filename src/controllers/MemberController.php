<?php
/**
 * MemberController.php.
 *
 * @author GUIGAND Jules
 *
 * @version 1.0
 */

namespace src\controllers;

use src\services\ConnexionService;

/**
 * BasketController.
 *
 * This class ensures the display of member.hmtl.twig
 * 
 */
class MemberController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        // the template path is the relative file path from `templates/`
        $twig->display('member.html.twig', [
            'customerId' => $_SESSION["id"],
            'customerFirstname' => $_SESSION["firstname"],
        ]);

    }
}


?>