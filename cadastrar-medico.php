<!-- Título da página -->
<h1>Cadastrar Médico</h1>

<!-- Formulário para cadastro de médicos -->
<form action="?page=salvar-medico" method="POST">
    <!-- Campo oculto que define a ação como 'cadastrar' -->
    <input type="hidden" name="acao" value="cadastrar"> 

    <!-- Campo para entrada do nome do médico -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_medico" class="form-control">
    </div>

    <!-- Campo para entrada do CRM do médico -->
    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" class="form-control">
    </div>

    <!-- Campo para entrada da especialidade do médico -->
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade_medico" class="form-control">
    </div>

    <!-- Botão para submeter o formulário -->
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>
