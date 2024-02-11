<?php

class UserModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function findByEmail($email) {
        echo 'pasando por aca';
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function createUser($name, $email, $password) {
        echo $name.' '.$email.' '.$password;
        $stmt = $this->db->prepare("INSERT INTO users (nombre, email, pass) VALUES (:nombre, :email, :pass)");
        return $stmt->execute(['nombre' => $name, 'email' => $email, 'pass' => $password]);
    }
}


