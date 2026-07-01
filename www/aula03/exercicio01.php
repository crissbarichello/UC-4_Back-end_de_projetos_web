<html>

<head>
    <title id="titulo">Condicionais 01</title>

</head>
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>
    <?php

    $valor = floatval($_POST["valor_input"]);
    $desconto = 0;
    $total = 0;

    if ($valor >= 500) {
        $desconto = $valor * 0.20;
        $total = $valor - $desconto;
        $retorno = "Status: <strong style='color: green;'>Total de desconto = R$ $desconto, Total= R$ $total</strong>";
    } elseif ($valor >= 200 && $valor <= 499) {
        $desconto = $valor * 0.10;
        $total = $valor - $desconto;
        $retorno = "Status: <strong style='color: green;'>Total de desconto = R$ $desconto, Total= R$ $total</strong>";
    } else {
        $retorno = "Status: <strong style='color: red;'>Não existe desconto, Total= R$ $valor</strong>";
    }
    ?>
    <form action="" method="post">
        <table align="center" border="solid" style="width:30%">
            <tr style="height:80px" align="center">
                <td>
                    <H1><?php echo "<h1> Sua Loja </h1>" ?></H1>
                </td>
            </tr>
            <tr style="height:80px" align="center">
                <td>
                    Usuário: <input type="float" name="valor_input"><br>

                    <input type="submit">Validar Desconto<br>
                    <div>
                        <?php
                        echo $retorno;
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>