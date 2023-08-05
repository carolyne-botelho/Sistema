<?php 

$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "sistema"; 

try {
    $conexao = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>