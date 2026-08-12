<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristec Tecnologia</title>
</head>


<body>
    <?php

    require_once "calculadora.php";

    $bonus = null;

    if (isset($_GET['calculadora'])) {

        $valor = floatval($_GET['calculadora']);

        $bonus = calcularGorjeta($valor);
    }

    ?>
    <main>
        <h1>Cristec Tecnologia - Calculadora de Gorjetas</h1>
        <form id="form" method="GET">
            <label for="busca">Informe o valor:</label>
            <input type="number" id="busca_id" name="calculadora" required><br><br>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <footer>

        <?php if ($bonus !== null): ?>
            <h2>Resultado</h2>
            <p>Valor de consumo: R$ <?= number_format($valor, 2, ',', '.') ?></p>
            <p>Gorjeta: R$ <?= number_format($bonus, 2, ',', '.') ?></p>
        <?php endif; ?>
    </footer>
</body>

</html>