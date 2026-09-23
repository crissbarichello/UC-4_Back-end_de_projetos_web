<?php
// Configurações da Despensa (Banco de Dados)
$host = "localhost";
$db   = "db_restaurante";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Chave de conexão funcionando!"; 
} catch (PDOException $e) {
    die("Erro ao conectar" . $e->getMessage());
}