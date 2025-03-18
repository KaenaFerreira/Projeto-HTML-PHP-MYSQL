<!-- Título da página -->
<h1>Editar Médico</h1>

<?php
// Consulta os dados do médico com base no ID recebido na requisição
$sql = "SELECT * FROM medico WHERE id_medico=" . $_REQUEST['id_medico'];
$res = $conn->query($sql);
$row = $res->fetch_object(); // Obtém os dados como um objeto
?>

<!-- Formulário para edição dos dados do médico -->
<form action="?page=salvar-medico" method="POST">
    <!-- Campo oculto para definir a ação como 'editar' -->
    <input type="hidden" name="acao" value="editar"> 

    <!-- Campo oculto para enviar o ID do médico a ser editado -->
    <input type="hidden" name="id_medico" value="<?php print $row->id_medico; ?>">

    <!-- Campo para editar o nome do médico -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_medico" value="<?php print $row->nome_medico; ?>" class="form-control">
    </div>

    <!-- Campo para editar o CRM do médico -->
    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" value="<?php print $row->crm_medico; ?>" class="form-control">
    </div>

    <!-- Campo para editar a especialidade do médico -->
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade_medico" value="<?php print $row->especialidade_medico; ?>" class="form-control">
    </div>

    <!-- Botão para salvar as alterações -->
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>
