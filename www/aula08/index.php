<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Carro</title>
</head>
<?php
class Carro
{
    public string $modelo;
    public string $cor;
    public int $ano;
    private int $velocidade = 0;

    public function ligar($cor)
    {
        return "O carro ". $cor . " está ligado";
    }

    public function acelerar($acelerar)
    {
        if ($acelerar > 0) {
            $this->velocidade += $acelerar;
        }
        return "Velocidade atual: " . $this->velocidade . " km/h";
    }

    public function freiar($freiar)
    {
        if ($freiar > 0) {
            $this->velocidade -= $freiar;
        }
        return "Freiando <br> Velocidade atual: " . $this->velocidade . " km/h";
    }
    
}
?>

<body>

    <?php
    $carro1 = new carro();
    $carro1->modelo = "Gol";
    $carro1->cor = "Prata";
    $carro1->ano = 2020;

    echo "Modelo: " . $carro1->modelo . "<br>";
    echo "Cor: " . $carro1->cor . "<br>";
    echo "Ano: " . $carro1->ano . "<br>";
    echo $carro1->ligar($carro1->cor) . "<br>";
    echo $carro1->acelerar(50) . "<br>";
    echo $carro1->freiar(20) . "<br>";
    ?>

</body>

</html>