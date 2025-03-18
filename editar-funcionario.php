<!-- Cabeçalho da página -->
<h1>Editar Funcionários</h1>
<?php
// Consulta os dados do médico com base no ID recebido na requisição
$sql = "SELECT * FROM usuarios WHERE id_usuario=" . $_REQUEST['id_usuario'];
$res = $conn->query($sql);
$row = $res->fetch_object(); // Obtém os dados como um objeto
?>

<!-- Formulário para editar um  funcionário -->
<form action="?page=salvar-funcionario" method="POST">
    <!-- Campo oculto para especificar a ação que será realizada -->
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Campo oculto para enviar o ID do funcionário a ser editado -->
    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">

    <!-- Campo para entrada do nome do funcionário -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
    </div>

    <!-- Campo para entrada do email do funcionário -->
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php print $row->email; ?>">
    </div>

    <!-- Campo para entrada da senha do funcionário -->
    <div class="mb-3">
        <label>Senha</label>
        <input type="text" name="senha" class="form-control" value="<?php print $row->senha;?>">
    </div>

    <!-- Botão para enviar o formulário -->
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>