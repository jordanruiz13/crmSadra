<?php

namespace App\Controllers;

use Core\Controller;    


class InventariosController extends Controller {

    public function index(){
        $datos= array();
        $this->render('inventarios/index', $datos);
    }


}