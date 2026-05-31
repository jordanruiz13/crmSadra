<?php

namespace App\Controllers;

use Core\Controller;    


class ClientesController extends Controller {

    public function index(){
        $datos= array();
        $this->render('clientes/index', $datos);
    }


}