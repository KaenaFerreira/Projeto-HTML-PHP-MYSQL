<!-- Título da página -->
<h1>Listar Pacientes</h1>

<?php
// Consulta para selecionar todos os pacientes
$sql = "SELECT * FROM paciente";
$res = $conn->query($sql);
$qtd = $res->num_rows; // Obtém a quantidade de registros retornados

// Verifica se existem resultados
if ($qtd > 0) {
    // Exibe a quantidade de resultados encontrados
    print "<p>Encontrou <b>$qtd</b> resultado(s)!</p>";

    // Cria a tabela para exibir os resultados
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>Telefone</th>";
    print "<th>Email</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Sexo</th>";
    print "<th>Endereço</th>";
    print "<th>Ações</th>";
    print "</tr>";

    // Itera pelos resultados e exibe cada registro na tabela
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_paciente . "</td>";
        print "<td>" . $row->nome_paciente . "</td>";
        print "<td>" . $row->cpf_paciente . "</td>";
        print "<td>" . $row->fone_paciente . "</td>";
        print "<td>" . $row->email_paciente . "</td>";
        print "<td>" . $row->dt_nasc_paciente . "</td>";
        print "<td>" . $row->sexo_paciente . "</td>";
        print "<td>" . $row->endereco_paciente . "</td>";
        print "<td>
                <button class='btn btn-success' 
                        onclick=\"location.href='?page=editar-paciente&id_paciente=" . $row->id_paciente . "';\">Editar</button>
                <button class='btn btn-danger' 
                        onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                        location.href='?page=excluir-paciente&id_paciente=" . $row->id_paciente . "';} else {false;}\">Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    // Mensagem exibida se nenhum resultado for encontrado
    print "Não encontrou resultado!";
}
?>
