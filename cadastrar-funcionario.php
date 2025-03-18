<!-- Cabeçalho da página -->
<h1>Cadastrar Funcionários</h1>

<!-- Formulário para cadastrar um novo funcionário -->
<form action="?page=salvar-funcionario" method="POST">
    <!-- Campo oculto para especificar a ação que será realizada -->
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Campo para entrada do nome do funcionário -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <!-- Campo para entrada do email do funcionário -->
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <!-- Campo para entrada da senha do funcionário -->
    <div class="mb-3">
        <label>Senha</label>
        <input type="text" name="senha" class="form-control">
    </div>

    <!-- Botão para enviar o formulário -->
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>
