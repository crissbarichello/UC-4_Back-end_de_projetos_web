<html>

<head>
    <title id="titulo">Condicionais 02</title>

</head>
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>
    <?php

        $mensagem = "";

        if (isset($_POST["valor"])) {
            $esta_logado = $_POST["valor"] === "true";

            $mensagem = $esta_logado ? 'Bem-vindo ao sistema! <br> <iframe height="1000"  width="1000" src="https://static.vecteezy.com/ti/vetor-gratis/p2/553935-mao-de-desenho-animado-fazendo-positivo-polegares-para-cima-gesto-gr%C3%A1tis-vetor.jpg" title="Beleza"></iframe>' : "Por favor, faça login";
        }
    ?>
    
    <form action="" method="post">
        <select name="valor" id="cars" w>
            <option value="true">Verdadeiro</option>
            <option value="false">Falso</option>
        </select><br>
        <input type="submit" value="Verificar"><br>
    </form>
    <?php
    echo $mensagem;
    ?>
</body>

</html>