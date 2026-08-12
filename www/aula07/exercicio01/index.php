<?php
class ContaBancaria {
    private $saldo = 0; // Ninguém fora da classe pode mudar o saldo diretamente
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
    public function getSaldo() {
        return "Saldo atual: R$ " . $this->saldo;
    }
}
$minhaConta = new ContaBancaria();
$minhaConta->depositar(100);
echo $minhaConta->getSaldo(); // Correto
// $minhaConta->saldo = 1000000; // Erro! O PHP não deixa mexer direto.