<?php 

class GlobalModel{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function insert($table, $data) {
        $keys = array_keys($data);
        $values = array_values($data);
    
        $columnNames = implode(", ", $keys);
        $placeholders = implode(", ", array_map(function($key) { return ":$key"; }, $keys));
    
        $sql = "INSERT INTO $table ($columnNames) VALUES ($placeholders)";
        
        $stmt = $this->db->prepare($sql);
    
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
    
        return $stmt->execute();
    }

    public function update($table, $data, $condition) {
        $updateFields = implode(", ", array_map(function($key) { return "$key = :$key"; }, array_keys($data)));
    
        $sql = "UPDATE $table SET $updateFields WHERE $condition";
    
        $stmt = $this->db->prepare($sql);
    
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
    
        return $stmt->execute();
    }

    public function listar($tabla) {
        $sql = "SELECT * FROM $tabla";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ); 
    }
    
    
}
