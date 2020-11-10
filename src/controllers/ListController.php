<?php

namespace src\controllers;



use src\services\MarketService;

class ListController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        $service = new MarketService();
        $list = $service->getProducts();
        //$result = $service->getBasket();

        // the template path is the relative file path from `templates/`
        $twig->display('list.html.twig', [
            'list' => $list,
            'notifications' => "notification",
        ]);
    }
}


?>