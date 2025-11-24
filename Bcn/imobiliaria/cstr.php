<?php
require_once 'imo.php';

// CADASTRO CLIENTE
if (isset($_POST['cadastrar_cliente'])) {
    $sql = "INSERT INTO cliente (nome, cpf, endereco, cidade, bairro)
            VALUES (:nome, :cpf, :endereco, :cidade, :bairro)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nome' => $_POST['nome'],
        ':cpf' => $_POST['cpf'],
        ':endereco' => $_POST['endereco'],
        ':cidade' => $_POST['cidade'],
        ':bairro' => $_POST['bairro']
    ]);

    $msg_cliente = "Cliente cadastrado com sucesso!";
}

// CADASTRO IMÓVEL
if (isset($_POST['cadastrar_imovel'])) {
    $sql = "INSERT INTO imovel 
           (tipo, finalidade, localizacao, area_construida, area_terreno, quartos, banheiros, vagas, descricao, idCliente)
            VALUES 
           (:tipo, :finalidade, :localizacao, :area_construida, :area_terreno, :quartos, :banheiros, :vagas, :descricao, :idCliente)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':tipo' => $_POST['tipo'],
        ':finalidade' => $_POST['finalidade'],
        ':localizacao' => $_POST['localizacao'],
        ':area_construida' => $_POST['area_construida'],
        ':area_terreno' => $_POST['area_terreno'],
        ':quartos' => $_POST['quartos'],
        ':banheiros' => $_POST['banheiros'],
        ':vagas' => $_POST['vagas'],
        ':descricao' => $_POST['descricao'],
        ':idCliente' => $_POST['idCliente']
    ]);

    $msg_imovel = "Imóvel cadastrado com sucesso!";
}

// LISTAR CLIENTES
$clientes = $pdo->query("SELECT * FROM cliente ORDER BY idCliente DESC")->fetchAll(PDO::FETCH_ASSOC);

// LISTAR IMÓVEIS
$imoveis = $pdo->query("SELECT * FROM imovel ORDER BY idImovel DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Cadastrar Cliente</h2>

    <?php if (isset($msg_cliente)) echo "<div class='mensagem'>$msg_cliente</div>"; ?>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="text" name="endereco" placeholder="Endereço">
        <input type="text" name="cidade" placeholder="Cidade">
        <input type="text" name="bairro" placeholder="Bairro">

        <button type="submit" name="cadastrar_cliente">Salvar Cliente</button>
    </form>
</div>

<div class="form-box">
    <h2>Cadastrar Imóvel</h2>

    <?php if (isset($msg_imovel)) echo "<div class='mensagem'>$msg_imovel</div>"; ?>

    <form method="POST">
        <input type="text" name="tipo" placeholder="Tipo de imóvel" required>
        <input type="text" name="finalidade" placeholder="Finalidade" required>
        <input type="text" name="localizacao" placeholder="Localização" required>
        <input type="text" name="area_construida" placeholder="Área construída">
        <input type="text" name="area_terreno" placeholder="Área do terreno">
        <input type="number" name="quartos" placeholder="Quartos">
        <input type="number" name="banheiros" placeholder="Banheiros">
        <input type="number" name="vagas" placeholder="Vagas">
        <input type="text" name="descricao" placeholder="Descrição">

        <label>Dono (Cliente):</label>
        <select name="idCliente">
            <?php foreach ($clientes as $c): ?>
                <option value="<?= $c['idCliente'] ?>"><?= $c['nome'] ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit" name="cadastrar_imovel">Salvar Imóvel</button>
    </form>
</div>

<h2>Clientes Cadastrados</h2>
<table>
    <tr>
        <th>ID</th><th>Nome</th><th>CPF</th><th>Cidade</th>
    </tr>
    <?php foreach ($clientes as $c): ?>
        <tr>
            <td><?= $c['idCliente'] ?></td>
            <td><?= $c['nome'] ?></td>
            <td><?= $c['cpf'] ?></td>
            <td><?= $c['cidade'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Imóveis Cadastrados</h2>
<table>
    <tr>
        <th>ID</th><th>Tipo</th><th>Finalidade</th><th>Dono</th>
    </tr>
    <?php foreach ($imoveis as $i): ?>
        <tr>
            <td><?= $i['idImovel'] ?></td>
            <td><?= $i['tipo'] ?></td>
            <td><?= $i['finalidade'] ?></td>
            <td><?= $i['idCliente'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
