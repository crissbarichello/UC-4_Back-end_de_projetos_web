<?php

class fazerCompras{
    public $itens;
    public $qtd = 0;

    private $valorItens = 0;

    public function calcValor($valor){
        if ($valor > 0) {
            $this->valorItens += $valor;
        }
        $this->valorItens = $this->valorItens *   $this->qtd;
        return "Total do item = " . $this->valorItens; 
    }

    public function listarProd(){
        
        return "Lista de Compras " . $this->itens . " X " . $this->qtd;
    }
}
$produtos = [
    ["item" => "Leite", "qtd" => 2, "valor" => 21],
    ["item" => "Pão", "qtd" => 4, "valor" => 12],
    ["item" => "Queijo", "qtd" => 3, "valor" => 15]
];

foreach ($produtos as $dados) {

    $produto = new fazerCompras();

    $produto->itens = $dados["item"];
    $produto->qtd = $dados["qtd"];

    echo $produto->listarProd();
    echo "<br>";
    echo $produto->calcValor($dados["valor"]);
    echo "<br><br>";
}
?>