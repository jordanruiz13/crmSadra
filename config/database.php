<?php
namespace Core;

use PDO;
use PDOException;

class Database {
    private static $conexion = null;

    public static function conectar() {
        // Si ya hay una conexión abierta, la reutilizamos para no saturar MySQL
        if (self::$conexion === null) {
            try {
                // Aquí usamos las constantes que definiste en config.php
                $host     = DB_HOST;
                $dbname   = DB_NAME;
                $usuario  = DB_USER;
                $password = DB_PASS;
                $charset  = 'utf8mb4'; // Súper importante para tildes y eñes

                $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
                
                // Configuraciones de seguridad y rendimiento para PDO
                $opciones = [
                    // Convierte cualquier error de SQL en una excepción de PHP para atraparla fácil
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    // Devuelve las filas como arrays asociativos: $usuario['nombre']
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    // Usa consultas preparadas reales del motor de MySQL para máxima seguridad
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];

                self::$conexion = new PDO($dsn, $usuario, $password, $opciones);

            } catch (PDOException $e) {
                // Si la base de datos falla, mostramos un error limpio y detenemos la app
                http_response_code(500);
                die("Error de conexión a la Base de Datos: " . $e->getMessage());
            }
        }

        return self::$conexion;
    }
}