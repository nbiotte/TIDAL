<?php
/**
 * ListController.php.
 *
 * @author BIOTTE Nathan
 *
 * @version 1.0
 */

namespace src\controllers;

use src\services\MarketService;

/**
 * ListController.
 *
 * This class ensures the display of list.hmtl.twig
 * 
 */
class ListController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        $service = new MarketService();
        
        // filter management
        $sliderFilter = 100;
        if(!empty($_POST)) $sliderFilter = $_POST["slider"];

        //Search list of products
        $products = $service->getProducts(null, ["price <= ".$sliderFilter]);

        // the template path is the relative file path from `templates/`
        $twig->display('list.html.twig', [
            'customerId' => $_SESSION["id"],
            'products' => $products,
            'sliderFilter' => $sliderFilter,
        ]);
    }

}


?>