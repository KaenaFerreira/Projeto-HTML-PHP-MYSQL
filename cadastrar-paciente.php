<!-- Título da página -->
<h1>Cadastrar Paciente</h1>

<!-- Formulário para cadastro de pacientes -->
<form action="?page=salvar-paciente" method="POST">
    <!-- Campo oculto que define a ação como 'cadastrar' -->
    <input type="hidden" name="acao" value="cadastrar"> 

    <!-- Campo para entrada do nome do paciente -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_paciente" class="form-control">
    </div>

    <!-- Campo para entrada do CPF do paciente -->
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_paciente" class="form-control">
    </div>

    <!-- Campo para entrada do telefone do paciente -->
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_paciente" class="form-control">
    </div>

    <!-- Campo para entrada do email do paciente -->
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_paciente" class="form-control">
    </div>

    <!-- Campo para entrada da data de nascimento do paciente -->
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc_paciente" class="form-control">
    </div>

    <!-- Campo para entrada do sexo do paciente -->
    <div class="mb-3">
        <label>Sexo</label>
        <input type="text" name="sexo_paciente" class="form-control">
    </div>

    <!-- Campo para entrada do endereço do paciente -->
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_paciente" class="form-control">
    </div>

    <!-- Botão para submeter o formulário -->
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Salvar</button>
    </div>
</form>
