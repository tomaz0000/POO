<?php

require_once 'produto.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {   // CORRIGIDO: POST maiúsculo

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $descricao  = $_POST["descricao"];

    if (!empty($nome)) {

        $sql = "INSERT INTO produtos (nome, preco, quantidade, descricao)
                VALUES (:nome, :preco, :quantidade, :descricao)";

        $stmt = $pdo->prepare($sql);   // CORRIGIDO: agora é $stmt

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":preco", $preco);
        $stmt->bindParam(":quantidade", $quantidade);   // CORRIGIDO
        $stmt->bindParam(":descricao", $descricao);

        if ($stmt->execute()) {
            $mensagem = "Produto cadastrado com sucesso!";
        } else {
            $mensagem = "Erro ao cadastrar produto.";
        }

    } else {
        $mensagem = "O campo nome é obrigatório";
    }
}

$sql = "SELECT * FROM produtos ORDER BY id DESC";
$stmt = $pdo->query($sql);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);   // CORRIGIDO: nome certo
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="form-container">
    <h2>Cadastro de Produtos</h2>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Preço:</label>
        <input type="text" name="preco">  <!-- CORRIGIDO: removido espaço -->

        <label>Quantidade:</label>
        <input type="text" name="quantidade">

        <label>Descrição:</label>
        <input type="text" name="descricao"> <!-- CORRIGIDO: removido espaço -->

        <button type="submit">Cadastrar</button>
    </form>

    <?php if (isset($mensagem)) { ?>
        <div class="mensagem"><?= $mensagem ?></div>
    <?php } ?>

    <?php if (!empty($produtos)) { ?>
        <div class="tabela-container">
            <h3>Produtos Cadastrados</h3>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $p) { ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= htmlspecialchars($p['nome']) ?></td>
                            <td><?= htmlspecialchars($p['preco']) ?></td>
                            <td><?= htmlspecialchars($p['quantidade']) ?></td>
                            <td><?= htmlspecialchars($p['descricao']) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } ?>

</div>

</body>
</html>
