<?php
require_once 'Aluno.php';     // Importa a classe Aluno (que herda de Pessoa)
require_once 'Professor.php'; // Importa a classe Professor (que também herda de Pessoa)

// Cria um novo objeto da classe Aluno com nome, idade e curso
$aluno = new Aluno("João Silva", 17, "Informática");

// Cria um novo objeto da classe Professor com nome, idade e disciplina
$professor = new Professor("Maria Santos", 35, "Matemática");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar</title> <!-- Título da aba do navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Importa o arquivo CSS -->
</head>
<body>
    <div class="container"> <!-- Área principal do conteúdo -->
        <h1>🎓 Sistema Escolar</h1> <!-- Título principal da página -->

        <!-- Bloco que exibe as informações do aluno -->
        <div class="card">
            <h2>Aluno</h2>
            <!-- Mostra o retorno do método apresentar() do objeto $aluno -->
            <p><?= $aluno->apresentar(); ?></p>
        </div>

        <!-- Bloco que exibe as informações do professor -->
        <div class="card">
            <h2>Professor</h2>
            <!-- Mostra o retorno do método apresentar() do objeto $professor -->
            <p><?= $professor->apresentar(); ?></p>
        </div>
    </div>
</body>
</html>
