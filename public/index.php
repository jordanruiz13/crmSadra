
<?php

    date_default_timezone_set("America/Mexico_City");

    //HELPERS
    //require_once "helpers/helpers.php";

    //Archivo rutas server
    require_once  __DIR__ . "/../config/config.php";

    require_once __DIR__ . '/../core/Controller.php';
    require_once __DIR__ . '/../core/Router.php';
    require_once __DIR__ . '/../core/Model.php';




    // Iniciamos el motor
    $router = new Core\Router();
    $router->run();

    // Ejecutamos el método run para procesar la URL y llamar al controlador/método correspondiente
    $router->run();