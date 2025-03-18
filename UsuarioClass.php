<?php

class Usuario
{
    /**
     * Método para realizar o login de um usuário.
     * @param string $email - O email do usuário.
     * @param string $senha - A senha do usuário.
     * @return bool - Retorna true se o login for bem-sucedido, false caso contrário.
     */
    public function login($email, $senha,)
    {
        // Usa a variável global $pdo para conexão com o banco de dados
        global $pdo;

        // Query para verificar as credenciais do usuário
        $sql2 = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql2 = $pdo->prepare($sql2); // Prepara a query para evitar SQL Injection
        $sql2->bindValue("email", $email);// Define o valor do parâmetro :email
        $sql2->bindValue("senha", md5($senha)); // Define o valor do parâmetro :senha (senha encriptada com MD5)
        $sql2->execute(); // Executa a query

        // Verifica se encontrou algum registro
        if ($sql2->rowCount() > 0) {
            $dado = $sql2->fetch(); // Obtém os dados do usuário

            // Armazena o ID do usuário na sessão
            $_SESSION['idUser'] = $dado['id_usuario'];
            $_SESSION['usuario_nome'] = $dado['nome'];

            return true; // Login bem-sucedido
        } else {
            return false; // Login falhou
        }
    }
}
  // Criando uma instância do usuário
$usuario = new Usuario();

// Supondo que você tenha obtido $email e $senha do formulário
$email = $_POST['email']; // exemplo de dado vindo do formulário
$senha = $_POST['senha']; // exemplo de dado vindo do formulário

// Realizando o login
if ($usuario->login($email, $senha)) {
    // Se o login for bem-sucedido, redireciona para a página de boas-vindas ou dashboard
    header("Location: index.php");
    exit();
} else {
    echo "Credenciais incorretas.";
}
?>
