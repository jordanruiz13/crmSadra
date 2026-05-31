<?php
namespace Core;

class Controller {
    
    /**
     * Une la vista específica con el Layout general de Codefox
     */
    public function render($nombreVista, $datos = []) {
        // 1. Desempaqueta el array de datos en variables independientes
        // Ejemplo: ['titulo' => 'Inicio'] crea la variable $titulo = 'Inicio'
        extract($datos);

        // 2. Construimos la ruta hacia el archivo .php de la vista
        $contenidoVista = __DIR__ . '/../src/views/' . $nombreVista . '.php';

        // 3. Cargamos el layout principal de Codefox.
        // Al requerirlo aquí, main_layout.php tendrá acceso total a $contenidoVista y a tus variables extraídas
        require_once __DIR__ . '/../src/views/layouts/layout.php';
    }
}