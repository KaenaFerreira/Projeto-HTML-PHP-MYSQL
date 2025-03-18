<h1>Seja Bem-Vindo</h1>
<?php
session_start();

// Verificar se o usuário está logado (se o nome está na sessão)
if (isset($_SESSION['usuario_nome'])) {
    echo "<b>". $_SESSION['usuario_nome']. "<b>". "!";
} else {
    echo "Você não está logado!";
}
?>