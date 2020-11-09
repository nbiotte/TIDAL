<?php

namespace src\controllers;

require_once(__DIR__.'/../services/MarketService.php');

use src\services\MarketService;

class ListController{

    public function __construct(){
        
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../views/template');
        $twig = new \Twig\Environment($loader);

        $service = new MarketService();
        $result = $service->getProducts(['id', 'name'], ["id = 2", "name LIKE \"%Module%\""]);

        // the template path is the relative file path from `templates/`
        $twig->display('list.html.twig', [
            'result' => $result,
            'notifications' => "notification",
        ]);
    }
}


?>