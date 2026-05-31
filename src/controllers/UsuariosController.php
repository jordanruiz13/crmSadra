<?php

namespace App\Controllers;

use Core\Controller;    


class UsuariosController extends Controller {

    public function index(){
        $datos= array();
        $this->render('usuarios/index', $datos);
    }


}