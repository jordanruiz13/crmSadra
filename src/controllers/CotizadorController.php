<?php

namespace App\Controllers;

use Core\Controller;    


class CotizadorController extends Controller {

    public function index(){
        $datos= array();
        $this->render('cotizador/index', $datos);
    }

    public function cotizaciones(){
        $datos= array();
        $this->render('cotizador/cotizaciones', $datos);
    }
    

    public function info(){
        $datos = array(['nombre'=>"pruebas"]);
        echo json_encode($datos);
        exit;
    }


}