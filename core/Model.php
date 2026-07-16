<?php
// core/Model.php
namespace Core;

use PDO;

class Model {
    /**
     * @var PDO Objeto de conexión compartida de PDO
     */
    protected $db;

    /**
     * @var string Nombre de la tabla en la base de datos (se define en cada modelo hijo)
     */
    protected $tabla;

    public function __construct() {
        // Obtenemos la conexión PDO única usando tu clase Database
        $this->db = Database::conectar();
    }

    /**
     * Obtiene todos los registros de la tabla configurada
     * 
     * @return array Lista de filas como arreglos asociativos
     */
    public function todos() {
        $stmt = $this->db->query("SELECT * FROM {$this->tabla}");
        return $stmt->fetchAll();
    }

    /**
     * Busca un único registro por su ID utilizando consultas preparadas
     * 
     * @param int|string $id El identificador único de la fila
     * @return array|false Datos del registro o false si no existe
     */
    public function buscarPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM {$this->tabla} WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}