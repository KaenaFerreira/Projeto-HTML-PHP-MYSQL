<!-- Título da página -->
<h1>Listar Funcionários</h1>

<?php
// Inclui o arquivo de configuração para conexão com o banco de dados
require 'config.php';

// Consulta para selecionar todos os usuários
$sql = "SELECT * FROM usuarios";
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
    print "<th>Email</th>";
    print "<th>Senha</th>";
    print "<th>Ações</th>";
    print "</tr>";

    // Itera pelos resultados e exibe cada registro na tabela
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_usuario . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->senha . "</td>";
        print "<td>
                <button class='btn btn-success' 
                        onclick=\"location.href='?page=editar-funcionario&id_usuario=" . $row->id_usuario . "';\">Editar</button>
                <button class='btn btn-danger' 
                        onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                        location.href='?page=excluir-funcionario&id_funcionario=" . $row->id_usuario . "';} else {false;}\">Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    // Mensagem exibida se nenhum resultado for encontrado
    print "Não encontrou resultado!";
}
?>
