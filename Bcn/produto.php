<?php

/*Desenvolva o banco de dados abaixo:
CREATE DATABASE sistema_produtos;

USE sistema_produtos;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    descricao TEXT
);

E desenvolva a conexao com o banco e o formulário para 

cadastrar as informações e depois mostre as informações em uma tabela.*/

$host = "localhost"; 
$banco = "pdt";
$usuario = "root";
$senha = "";

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8" ,$usuario, $senha);
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo 'conexao bem sucedida ';
}

catch(PDOException $e)      
 {
 echo "Erro ao conectar: " . $e->getMessage();

    
    ;}


?>