<?php

/**metodo construtor executa no momento em que o objetos é criado */
class Aluno {
    public $nome;
    public $cidade;
    public $bairro;
    private $endereco;
    public $curso;

    public function __construct($nome, $cidade, $bairro, $endereco, $curso) {
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->endereco = $endereco;
        $this->curso = $curso;
    }

    public function mostrarDados() {
        echo "<h2>Dados do Aluno</h2>";
        echo "Nome: {$this->nome}<br>";
        echo "Cidade: {$this->cidade}<br>";
        echo "Bairro: {$this->bairro}<br>";
        echo "Endereço: {$this->endereco}<br>";
        echo "Curso: {$this->curso}<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = new Aluno(
        $_POST['nome'],
        $_POST['cidade'],
        $_POST['bairro'],
        $_POST['endereco'],
        $_POST['curso']
    );
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Escolha seu curso</h1>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Cidade: <input type="text" name="cidade" required><br><br>
        Bairro: <input type="text" name="bairro" required><br><br>
        Endereço: <input type="text" name="endereco" required><br><br>

        Curso:
        <select name="curso" required>
            <option value="">Selecione...</option>
            <option>Informática para Internet</option>
            <option>Desenvolvimento de Sistemas</option>
            <option>Front-End</option>
            <option>Back-End</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($aluno)) {
        $aluno->mostrarDados();
    }
    ?>
</body>
</html>
