<?php
require 'conexao.php';


// CRUD  --------------------------------------------------------------------------

require 'UsuarioModel.php';

$usuarioModel = new UsuarioModel($pdo);

// // // insert no banco
//     $usuario = $usuarioModel->inserir("Fabio", "fabio@email.com", "senha123");
//     print_r($usuario);


// // select no banco 
    $usuarios = $usuarioModel->ler();

//     // Exibe a lista completa de usuários formatada na tela
    echo "<pre>";
    print_r($usuarios);
    echo "</pre>";

// // // update no banco
//     $idParaAlterar = 2;
//     $novoNome = "Fabio Atualizado";
//     $novoEmail = "fabio.novo@email.com";

//     $sucesso = $usuarioModel->atualizar($idParaAlterar, $novoNome, $novoEmail);


// // // delete no banco
// //     // Executa o DELETE (Exemplo: apagando o usuário de ID 1)
//     $idParaDeletar = 1; 
//     $sucesso = $usuarioModel->deletar($idParaDeletar);


// -------------------------------------------------------------------------------------

// Criar uma tabela no Banco de Dados

// try {
//     // Comando SQL para criar a tabela se ela não existir
//     $sql = "CREATE TABLE IF NOT EXISTS usuarios_dois (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         nome VARCHAR(100) NOT NULL,
//         email VARCHAR(100) NOT NULL UNIQUE,
//         senha VARCHAR(255) NOT NULL,
//         criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

//     // Executa o comando usando a variável $pdo do arquivo conexao.php
//     $pdo->exec($sql);
    
//     echo "Tabela criada com sucesso!";
// } catch (PDOException $e) {
//     die("Erro ao criar a tabela: " . $e->getMessage());
// }