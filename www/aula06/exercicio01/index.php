<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristec tecnologia</title>
    <body>
        <main>
            <?php
                include "banner.php"; // Se errar o nome, o resto do site ainda aparece.
                require_once "config.php"; // Se este arquivo não for encontrado, o PHP trava tudo aqui.

                echo "<h1>Bem-vindo ao Portal do Aluno</h1>";
                echo "<p>Aqui você encontra suas notas e frequências.</p>";

                echo "Conectando ao banco: " . $banco_de_dados . " user: " . $usuario_db;
                echo "<h2>Painel Administrativo</h2>";


                
                echo "<h3>Lista de tabelas</h3>";
                echo '<ol>
                        <li><a href="./tabela.php">Tabela 1</a></li>
                        <li><a href="./tabela2.php">Tabela 2</a></li>
                        <li><a href="./tabela3.php">Tabela 3</a></li>
                        <li><a href="./tabela4.php">Tabela 4</a></li>
                    </ol>';
            ?>
        </main>
        <footer>
            <?php  footer(); ?>
        </footer>
    </body>

</html>