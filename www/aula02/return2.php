<html>

<head>
    <title id="titulo">Exemplo 02</title>

</head>

<body>
    <?php
        $usuario_cadastrado = "admin";
        $senha_correta = "1234";
        $acesso_concedido = false;
        $tentativa_usuario = $_POST["name"] ?? "";
        $tentativa_senha = $_POST["password"] ?? "";
        $text = "";
        try {

            if ($tentativa_usuario==$usuario_cadastrado && $tentativa_senha==$senha_correta) {
                $acesso_concedido = true;
            }else{
                $acesso_concedido = false;
            } 
            $text = match($acesso_concedido) {
                true => "Acesso Liberado",
                false => "Acesso Negado!",
            };
        } catch (\UnhandledMatchError $e) {
            var_dump($e);
        }
        echo $text;
    ?>

</body>

</html>