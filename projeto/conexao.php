<?php 
$host = "mysql:host=localhost;dbname=projetophp";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($host, $user, $pass);
} catch (Exception $e) {
    die("Erro:".$e->getMessage());
}

//FALTA TESTAR
?>