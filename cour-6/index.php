<?php

$host = 'localhost';
$port = 3306;
$dbname = 'sporact';
$user = 'root';
$pass = '';

$connect ="mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    $pdo = new  PDO($connect,$user,$pass);
    echo 'connected successfly';

}

catch (PDOException $e){
    echo 'connection Failed:' .$e->getMessage();
}