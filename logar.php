<?php
// Verifica se os campos 'email' e 'senha' foram enviados e não estão vazios
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    
    // Inclui os arquivos necessários
    require 'config2.php'; // Configuração do banco de dados
    require 'UsuarioClass.php'; // Classe para manipulação de usuários

    // Cria uma nova instância da classe Usuario
    $u = new Usuario();
    
    // Obtém os valores enviados pelo formulário, usando addslashes para evitar injeção de código
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    // Chama o método de login da classe Usuario
    if ($u->login($email, $senha) == true) {
        // Verifica se a sessão foi iniciada com sucesso
        if (isset($_SESSION['idUser'])) {
            header("Location: index.php"); // Redireciona para a página inicial
        } else {
            header("Location: login.php"); // Redireciona para a página de login se a sessão não existir
        }
    } else {
        header("Location: login.php"); // Redireciona para a página de login em caso de falha
    }
} else {
    header("Location: login.php"); // Redireciona para a página de login se os campos não forem preenchidos
}
?>
