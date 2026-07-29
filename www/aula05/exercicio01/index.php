<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristec Tecnologia</title>
</head>
<?php 
    $nome ="";
    function exibirRodape($nome){
        echo '<div class="rodape-inferior"><p>&copy; '. date('Y') . ' '. $nome .'. Todos os direitos reservados.</p></div>';
    }
?>

<body>
    <main>
        <h1>Cristec Tecnologia - Buscador</h1>
        <form id="form" action="./busca.php" method="POST">
            <label for="busca">Buscador:</label>
            <input type="text" id="busca_id" name="busca" required><br><br>
            <input type="submit" value="Buscar">
        </form>
    </main>
    <footer>
        <?php exibirRodape("Cristec")?>
    </footer>
</body>
</html> 