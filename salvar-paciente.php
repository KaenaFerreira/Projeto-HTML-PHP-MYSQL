<?php
// Verifica a ação recebida na requisição
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        // Obtém os dados do formulário
        $nome = $_POST['nome_paciente'];
        $cpf = $_POST['cpf_paciente'];
        $fone = $_POST['fone_paciente'];
        $email = $_POST['email_paciente'];
        $dt_nasc = $_POST['dt_nasc_paciente'];
        $sexo = $_POST['sexo_paciente'];
        $endereco = $_POST['endereco_paciente'];

        // Query para inserir um novo paciente no banco de dados
        $sql = "INSERT INTO paciente (
                    nome_paciente,
                    cpf_paciente,
                    fone_paciente,
                    email_paciente,
                    dt_nasc_paciente,
                    endereco_paciente,
                    sexo_paciente
                ) VALUES (
                    '{$nome}',
                    '{$cpf}',
                    '{$fone}',
                    '{$email}',
                    '{$dt_nasc}',
                    '{$endereco}',
                    '{$sexo}'
                )";

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a inserção foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'editar':
        // Obtém os dados do formulário
        $nome = $_POST['nome_paciente'];
        $cpf = $_POST['cpf_paciente'];
        $fone = $_POST['fone_paciente'];
        $email = $_POST['email_paciente'];
        $dt_nasc = $_POST['dt_nasc_paciente'];
        $sexo = $_POST['sexo_paciente'];
        $endereco = $_POST['endereco_paciente'];

        // Query para atualizar um paciente existente no banco de dados
        $sql = "UPDATE paciente SET 
                    nome_paciente='{$nome}',
                    cpf_paciente='{$cpf}',
                    fone_paciente='{$fone}',
                    email_paciente='{$email}',
                    dt_nasc_paciente='{$dt_nasc}',
                    sexo_paciente='{$sexo}',
                    endereco_paciente='{$endereco}'
                WHERE
                    id_paciente=" . $_REQUEST['id_paciente'];

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a atualização foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'excluir':
        // Query para excluir um paciente do banco de dados
        $sql = "DELETE FROM paciente
                WHERE id_paciente=" . $_REQUEST['id_paciente'];

        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a exclusão foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;
}
?>
