<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}

// Verifica o nível de permissão do usuário
if ($_SESSION['usuario_nivel'] != 1) {  // 1 = Funcionario, 2 = Administrador
    echo "Acesso negado. Você não tem permissão para acessar esta página.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h1>
    <p>Esta é a página restrita apenas para funcionários.</p>
    <a href="logout.php">Sair</a>
</body>
</html>
