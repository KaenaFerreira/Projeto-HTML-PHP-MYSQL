<?php
// Verifica e define constantes apenas se ainda não estiverem definidas
if (!defined('HOST')) {
    define('HOST', 'localhost'); // Define o host do banco de dados
}
if (!defined('USER')) {
    define('USER', 'root'); // Define o usuário do banco de dados
}
if (!defined('PASS')) {
    define('PASS', ''); // Define a senha do banco de dados
}
if (!defined('BASE')) {
    define('BASE', 'clinica2'); // Define o nome do banco de dados
}

// Cria a conexão com o banco de dados usando os valores definidos
$conn = new mysqli(HOST, USER, PASS, BASE);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error); // Finaliza o script em caso de erro
}
?>



