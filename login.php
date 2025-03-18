<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Container centralizado vertical e horizontalmente -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <!-- Card para o formulário de login -->
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <!-- Cabeçalho do formulário -->
            <div class="text-center mb-4">
                <h3>Login</h3>
                <p class="text-muted">Digite suas credenciais para acessar</p>
            </div>
            <!-- Formulário de login -->
            <form autocomplete="off" action="logar.php" method="POST">
                <!-- Campo para o e-mail -->
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" autocomplete="off">
                </div>
                <!-- Campo para a senha -->
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha" autocomplete="new-password">
                </div>
                <!-- Botão de envio -->
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

