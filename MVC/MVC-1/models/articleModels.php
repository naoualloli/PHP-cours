<?php

function connecter(){

    $host = 'localhost';
    $port = 3306;
    $dbname = 'gestion de stock';

    $username = 'root';
    $password = '';

    $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

    try{
        $pdo = new PDO($dsn,$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $pdo ;
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}
function getListeArticles(){
    $pdo = connecter();
    $statment=$pdo->prepare('SELECT * FROM article');
    $statment->execute();
    $articles =$statment->fetchAll(PDO::FETCH_ASSOC);
    return $articles;

}