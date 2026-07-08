<table align="center" border="solid" style="width:10%">
    <tr>
        <td>Foreach produtos</td>
    
    <tr>
        <td>
            <ul>
                <?php
                $produtos = ["Arroz", "Feijão", "Macarrão"];

                foreach ($produtos as $nome) {
                    echo "<li>Produto: $nome </li>";

                }
                ?>
            </ul>
        </td>
    </tr>
</table>