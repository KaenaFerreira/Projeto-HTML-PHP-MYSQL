<!-- Título da página -->
<h1>Editar Paciente</h1>

<?php
// Consulta os dados do paciente com base no ID recebido na requisição
$sql = "SELECT * FROM paciente WHERE id_paciente=" . $_REQUEST['id_paciente'];
$res = $conn->query($sql);
$row = $res->fetch_object(); // Obtém os dados como um objeto
?>

<!-- Formulário para edição dos dados do paciente -->
<form action="?page=salvar-paciente" method="POST">
    <!-- Campo oculto para definir a ação como 'editar' -->
    <input type="hidden" name="acao" value="editar"> 

    <!-- Campo oculto para enviar o ID do paciente a ser editado -->
    <input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">

    <!-- Campo para editar o nome do paciente -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_paciente" value="<?php print $row->nome_paciente; ?>" class="form-control">
    </div>

    <!-- Campo para editar o CPF do paciente -->
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_paciente" value="<?php print $row->cpf_paciente; ?>" class="form-control">
    </div>

    <!-- Campo para editar o email do paciente -->
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_paciente" value="<?php print $row->email_paciente; ?>" class="form-control">
    </div>

    <!-- Campo para editar a data de nascimento do paciente -->
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc_paciente" value="<?php print $row->dt_nasc_paciente; ?>" class="form-control">
    </div>

    <!-- Campo para editar o telefone do paciente -->
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_paciente" value="<?php print $row->fone_paciente; ?>" class="form-control">
    </div>

    <!-- Campo para editar o sexo do paciente -->
    <div class="mb-3">
        <label>Sexo</label>
        <input type="text" name="sexo_paciente" value="<?php print $row->sexo_paciente; ?>" class="form-control">
    </div>

    <!-- Campo para editar o endereço do paciente -->
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_paciente" value="<?php print $row->endereco_paciente; ?>" class="form-control">
    </div>

    <!-- Botão para salvar as alterações -->
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>
