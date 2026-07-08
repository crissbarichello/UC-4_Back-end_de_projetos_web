<table align="center" border="solid" style="width:10%">
    <tr>
        <td><p>Contagem regressiva!</p></td>
    </tr>

    <?php
    $i = 10;

    while ($i >= 0) {
        echo "<tr><td>$i </td></tr>";
        $i--;
    }
    echo "<tr><td>Fogo</td></tr>";
    ?>
</table>