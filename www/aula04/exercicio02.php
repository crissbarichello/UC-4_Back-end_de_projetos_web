<table align="center" border="solid" style="width:10%">
    <tr>
        <td>Fila de Processamento</td>
    </tr>

    <?php
    $limite = 0;

    do {
        
        echo "<tr><td>Processando item... $limite</td></tr>";
        
        $limite--;
    } while ($limite > 0);
    ?>
</table>