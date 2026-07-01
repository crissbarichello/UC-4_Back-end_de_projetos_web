<html>

<head>
    <title id="titulo">Exemplo 02</title>

</head>
<style>
.error {color: #FF0000;}
</style>

<body>
    <?php

    define("NOME_LOJA", 'Login');
    
    $nameErr = $emailErr = "";
    $name = $email = "";
    $data = "";
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <form action="return2.php" method="post">
        <table align="center" border="solid" style="width:20%">
            <tr style="height:80px" align="center">
                <td>
                    <H1><?php echo "<h1> " . NOME_LOJA . " </h1>" ?></H1>
                </td>
            </tr>
            <tr style="height:80px" align="center">
                <td>
                    Usuário: <input type="text" name="<?php echo $name; ?>"><span class="error">* <?php echo $nameErr; ?></span><br>
                    Senha: <input type="password" name="password"><br>
                    <input type="submit"><br>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>