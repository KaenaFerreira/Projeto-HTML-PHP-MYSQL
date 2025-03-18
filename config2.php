<?php
// Inicia a sessão para armazenar dados entre requisições
session_start();

// Definição das variáveis de conexão
$localhost = "localhost"; // Endereço do servidor
$user = "root";           // Usuário do banco de dados
$passw = "";              // Senha do banco de dados
$banco = "clinica2";       // Nome do banco de dados

try {
    // Criação de uma conexão PDO com o banco de dados
    $pdo = new PDO("mysql:dbname=" . $banco . ";host=" . $localhost, $user, $passw);

    // Configura a conexão para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Captura e exibe mensagens de erro em caso de falha na conexão
    echo "ERRO: " . $e->getMessage();
    exit; // Encerra o script após exibir o erro
}
?>
