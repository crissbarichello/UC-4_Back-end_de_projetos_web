<?php

class Usuario {
    // 1. Atributos (Características)
    public $nome;
    public $email;

    // 2. Método (Ação)
    public function exibirDados() {
        // O $this serve para o objeto falar de si mesmo
        return "Usuário: " . $this->nome . " | Contato: " . $this->email;
    }
}

class Veiculo {
    public $marca;
    public function buzinar() {
        return "Beep Beep!";
    }
}
class Moto extends Veiculo {
    public $cilindradas;

    public function motor() {
        return "Potência é de " . $this->cilindradas ." cilindradas";
    }
}
// --- CRIANDO OS OBJETOS (Instanciar) ---

// Criando o primeiro usuário
$usuario1 = new Usuario();
$usuario1->nome = "Ricardo Oliveira";
$usuario1->email = "ricardo@email.com";

// Criando o segundo usuário (mesma planta, dados diferentes)
$usuario2 = new Usuario();
$usuario2->nome = "Mariana Costa";
$usuario2->email = "mari@email.com";

// Usando o método
echo $usuario1->exibirDados();
echo "<br>";
echo $usuario2->exibirDados();
echo "<br>";

$minhaMoto = new Moto();
$minhaMoto->marca = "Honda"; // Herdado de Veiculo
$minhaMoto->cilindradas = "1000";

echo $minhaMoto->buzinar();   // Herdado de Veiculo
echo "<br>";
echo $minhaMoto->motor();
?>