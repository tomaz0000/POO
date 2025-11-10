<?php

include_once 'Calculadora.php';
$valor1 = $valor2 = $resultado = $operacao = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // corrigido: faltavam aspas
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    // criação do objeto (retirado a vírgula extra)
    $Calculadora = new Calculadora($valor1, $valor2);

    switch ($operacao) {
        case 'somar':
            $resultado = $Calculadora->somar();
            break;

        case 'dividir':
            $resultado = $Calculadora->dividir();
            break;

        case 'subtrair':
            $resultado = $Calculadora->subtrair();
            break;

        case 'multiplicar':
            $resultado = $Calculadora->multiplicar();
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="" method="post">

        <label for="valor1">Digite o número</label>
        <input type="number" name="valor1" id="valor1" value="<?php echo $valor1; ?>" required>

        <label for="valor2">Digite o número</label>
        <input type="number" name="valor2" id="valor2" value="<?php echo $valor2; ?>" required> <br>

        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">
            <option value="somar" <?php echo ($operacao == 'somar') ? 'selected' : ''; ?>>Soma</option>
            <option value="dividir" <?php echo ($operacao == 'dividir') ? 'selected' : ''; ?>>Dividir</option>
            <option value="subtrair" <?php echo ($operacao == 'subtrair') ? 'selected' : ''; ?>>Subtrair</option>
            <option value="multiplicar" <?php echo ($operacao == 'multiplicar') ? 'selected' : ''; ?>>Multiplicação</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($resultado !== '') {
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>
