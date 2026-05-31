<?php

namespace App\Controllers;

use Core\Controller;    


class ProspectosController extends Controller {

    public function index(){
        $datos= array();
        $this->render('prospectos/index', $datos);
    }


}