<?php
require_once 'aluguel de carro.php';
require_once 'moto.php';
require_once 'cliente.php';

$veiculos = [
    new carros("Toyota", "Corolla", 500, 500),
    new carros("Honda", "Civic", 400, 450, false),
    new Moto("Yamaha", "MT-07", 200, 700),
    new Moto("Honda", "CB 500", 180, 500)
];

$cliente = new Cliente("João Silva", "123.456.789-00");

// Verifica se o botão "Alugar" foi clicado
if (isset($_GET['alugar'])) {
    $id = $_GET['alugar'];
    if (isset($veiculos[$id])) {
        $veiculos[$id]->alugar();
    }
}

// Verifica se o botão "Devolver" foi clicado
if (isset($_GET['devolver'])) {
    $id = $_GET['devolver'];
    if (isset($veiculos[$id])) {
        $veiculos[$id]->devolver();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Locadora de Veículos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🚗 Locadora de Veículos</h1>
        <h2>Cliente: <?= $cliente->nome ?> (CPF: <?= $cliente->cpf ?>)</h2>

        <table>
            <tr>
                <th>Descrição</th>
                <th>Preço da Diária (R$)</th>
                <th>Status</th>
                <th>Valor 3 dias (R$)</th>
                <th>Ação</th>
            </tr>

            <?php foreach ($veiculos as $i => $v): ?>
            <tr>
                <td><?= $v->pegarDescricao() ?></td>
                <td><?= number_format($v->pegadiaria(), 2, ',', '.') ?></td>
                <td class="<?= $v->verificarstatus() == 'disponivel' ? 'verde' : 'vermelho' ?>">
                    <?= ucfirst($v->verificarstatus()) ?>
                </td>
                <td><?= number_format($v->calcularcusto(3), 2, ',', '.') ?></td>
                <td>
                    <?php if ($v->verificarstatus() == 'disponivel'): ?>
                        <a href="?alugar=<?= $i ?>"><button class="btn alugar">Alugar</button></a>
                    <?php else: ?>
                        <a href="?devolver=<?= $i ?>"><button class="btn devolver">Devolver</button></a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
