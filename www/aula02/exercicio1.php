<html>

<head>
    <title id="titulo">Loja Cristec</title>
    
</head>

<body>
    <?php
    define("NOME_LOJA",'Cristec Informática');
    $produto = "Películas";
    $preco = 15.00;
    $quantidade = 20;

    $total = $quantidade * $preco ;
    
    echo "<h1> ".NOME_LOJA." </h1>
    <div>
        <p>Produto: $produto </p>
        <p>Preço: $preco </p>
        <p>Quantidade: $quantidade</p>
    </div>
    <div>
        <p>Resultado: R$ $total </p>
    </div>
    "
    ?>


    </body>
</html>