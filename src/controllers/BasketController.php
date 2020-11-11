<?php
/**
 * BasketController.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\controllers;

use src\services\MarketService;

/**
 * BasketController.
 *
 * This class ensures the display of basket.hmtl.twig
 * 
 */
class BasketController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        $service = new MarketService();

        // the template path is the relative file path from `templates/`
        $twig->display('basket.html.twig', [
            'customerId' => $_SESSION["id"]
        ]);
    }

}


?>