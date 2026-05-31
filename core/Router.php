<?php
namespace Core;

class Router {
    // Valores por defecto si la URL viene vacía (ej: tuweb.com/)
    protected $controller = 'UsuariosController'; 
    protected $method     = 'index';
    protected $params     = [];

    public function __construct() {
        // 1. Obtener la URL limpia desde el $_GET['url'] que configuramos en el .htaccess
        $url = $this->parseUrl();

        // 2. BUSCAR EL CONTROLADOR
        /*if (isset($url[0])) {
            // Formateamos el texto: "usuarios" pasa a ser "UsuariosController"
            $controllerName = ucfirst($url[0]) . 'Controller';
            
            // Verificamos si el archivo físico existe en tu carpeta de controladores
            if (file_exists(__DIR__ . '/../src/controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]); // Lo quitamos para que no estorbe en los parámetros
            } else {
                // Si escribió algo en la URL pero el archivo no existe: 404
                $this->enviar404("El controlador '$controllerName' no fue encontrado.");
            }
        }*/


        // 2. BUSCAR EL CONTROLADOR
        if (isset($url[0])) {
            // Formateamos el texto: "usuarios" pasa a ser "UsuariosController"
            $controllerName = ucfirst($url[0]) . 'Controller';
            $fileRoute = __DIR__ . '/../src/controllers/' . $controllerName . '.php';
            
            // Verificamos si el archivo físico existe en tu carpeta de controladores
            if (file_exists($fileRoute)) {
                // CORRECCIÓN: Cargamos el archivo en memoria antes de usarlo
                require_once $fileRoute; 

                $this->controller = $controllerName;
                unset($url[0]); // Lo quitamos para que no estorbe en los parámetros
            } else {
                // Si escribió algo en la URL pero el archivo no existe: 404
                $this->enviar404("El controlador '$controllerName' no fue encontrado.");
            }
        } else {
            // CORRECCIÓN: Si entran a la raíz (URL vacía), cargamos el controlador por defecto
            $defaultFile = __DIR__ . '/../src/controllers/' . $this->controller . '.php';
            if (file_exists($defaultFile)) {
                require_once $defaultFile;
            } else {
                $this->enviar404("El controlador por defecto '{$this->controller}' no existe.");
            }
        }

        // 3. INSTANCIAR EL CONTROLADOR
        // Construimos la ruta con su Namespace: App\Controllers\UsuariosController
        $fullClassPath = "App\Controllers\\" . $this->controller;
        $this->controller = new $fullClassPath();

        // 4. BUSCAR EL MÉTODO (LA ACCIÓN)
        if (isset($url[1])) {
            // Verificamos si la función existe dentro de la clase del controlador
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                $this->enviar404("El método '{$url[1]}' no existe en este controlador.");
            }
        }

        // 5. CAPTURAR LOS PARÁMETROS
        // Reindexamos el array para que los parámetros empiecen desde el índice 0
        $this->params = $url ? array_values($url) : [];
    }

    /**
     * Ejecuta el controlador y el método detectado pasándole los parámetros
     */
    public function run() {
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Convierte la cadena del .htaccess en un array limpio
     */
    private function parseUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [];
    }

    /**
     * Lanzador de errores 404
     */
    private function enviar404($error) {
        http_response_code(404);
        echo "<h1>404 - Página no encontrada</h1>";
        echo "<p>" . htmlspecialchars($error) . "</p>";
        exit;
    }
}