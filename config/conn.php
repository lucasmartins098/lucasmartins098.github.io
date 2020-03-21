<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'img';
$dsn = "mysql:host={$host};port=3308;dbname={$banco}";

try 
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}