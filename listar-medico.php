<!-- Título da página -->
<h1>Listar Médicos</h1>

<?php
// Inclui o arquivo de configuração para conexão com o banco de dados
require 'config.php';

// Consulta para selecionar todos os médicos
$sql = "SELECT * FROM medico";
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
    print "<th>CRM</th>";
    print "<th>Especialidade</th>";
    print "<th>Ações</th>";
    print "</tr>";

    // Itera pelos resultados e exibe cada registro na tabela
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_medico . "</td>";
        print "<td>" . $row->nome_medico . "</td>";
        print "<td>" . $row->crm_medico . "</td>";
        print "<td>" . $row->especialidade_medico . "</td>";
        print "<td>
                <button class='btn btn-success' 
                        onclick=\"location.href='?page=editar-medico&id_medico=" . $row->id_medico . "';\">Editar</button>
                <button class='btn btn-danger' 
                        onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                        location.href='?page=excluir-medico&id_medico=" . $row->id_medico . "';} else {false;}\">Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    // Mensagem exibida se nenhum resultado for encontrado
    print "Não encontrou resultado!";
}
?>
