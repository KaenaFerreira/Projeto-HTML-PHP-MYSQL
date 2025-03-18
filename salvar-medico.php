<?php
// Verifica a ação recebida na requisição
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        // Obtém os dados do formulário
        $nome = $_POST['nome_medico'];
        $crm = $_POST['crm_medico'];
        $especialidade = $_POST['especialidade_medico'];

        // Query para inserir um novo médico no banco de dados
        $sql = "INSERT INTO medico (
                    nome_medico,
                    crm_medico,
                    especialidade_medico
                ) VALUES (
                    '{$nome}',
                    '{$crm}',
                    '{$especialidade}'
                )";

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a inserção foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        }
        break;

    case 'editar':
        // Obtém os dados do formulário
        $nome = $_POST['nome_medico'];
        $crm = $_POST['crm_medico'];
        $especialidade = $_POST['especialidade_medico'];

        // Query para atualizar um médico existente no banco de dados
        $sql = "UPDATE medico SET 
                    nome_medico='{$nome}',
                    crm_medico='{$crm}',
                    especialidade_medico='{$especialidade}'
                WHERE
                    id_medico=" . $_REQUEST['id_medico'];

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a atualização foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        }
        break;

    case 'excluir':
        // Query para excluir um médico do banco de dados
        $sql = "DELETE FROM medico
                WHERE id_medico=" . $_REQUEST['id_medico'];

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a exclusão foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        }
        break;
}
?>
