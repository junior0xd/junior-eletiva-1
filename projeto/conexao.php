<?php 
$host = "localhost";
$user = "bisel";
$pass = "junior";

try {
    $pdo = new PDO($host, $user, $pass);
} catch (Exception $e) {
    die("Erro:".$e->getMessage());
}
?>