<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>

<body>


    <?php

    class fazerCompras
    {
        public string $itens;
        public int $qtd = 0;

        private float $valorItens = 0;

        public function listarProd($posicao)
        {

            return $posicao . " -  | " . $this->itens . " X  " . $this->qtd;
        }

        public function calcValor($valor)
        {
            if ($valor > 0) {
                $this->valorItens += $valor;
            }
            $this->valorItens = $this->valorItens *   $this->qtd;
            return " = " . "R$" . number_format($this->valorItens, 2, ',', '.');
        }

        
    }
    $produtos = [
        ["item" => "Leite", "qtd" => 2, "valor" => 21],
        ["item" => "Pão", "qtd" => 4, "valor" => 12],
        ["item" => "Queijo", "qtd" => 3, "valor" => 15]
    ];

    $posicao = 0;

    echo "Lista de Compras:";
    echo "<br>";
    echo "N° Item | Produto| Quantidade | Valor";
    echo "<hr>";

    foreach ($produtos as $dados) {

        $produto = new fazerCompras();

        $produto->itens = $dados["item"];
        $produto->qtd = $dados["qtd"];
        $posicao++;


        echo $produto->listarProd($posicao);
        echo $produto->calcValor($dados["valor"]);
        echo "<br><br>";
    }
    ?>
</body>

</html>