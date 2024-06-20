<?php

require_once 'config.php';

class UserModel {
    private $pdo;

    public function __construct(){

        $this->pdo = new PDO('mysql:host='.BD_HOST.';dbname='.BD_NAME,BD_USER,DB);
    }
    public function getUsers() {
        $statment = $this->pdo->prepare('SELECT * FROM users');
        $statment->execute();
        $users = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
    public function addUsers($name , $email) {
        $statment = $this->pdo->prepare('INSERT INTO users (name,email) VALUES (,)');
        return $statment->execute([$name,$email]);

}