<?php
// Inclui o arquivo de configuração do banco de dados
require 'config.php';

// Verifica a ação recebida pela requisição
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        // Obtém os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Query para inserir um novo usuário no banco de dados
        $sql = "INSERT INTO usuarios (
                    nome,
                    email,
                    senha
                ) VALUES (
                    '{$nome}',
                    '{$email}',
                    '{$senha}'
                )";
        
        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a inserção foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        }
        break;

    case 'editar':
        // Obtém os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Query para atualizar um usuário existente no banco de dados
        $sql = "UPDATE usuarios SET 
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}'
                WHERE
                    id_usuario=" . $_REQUEST['id_usuario'];
        
        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a atualização foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        }
        break;

    case 'excluir':
        // Query para excluir um usuário do banco de dados
        $sql = "DELETE FROM usuarios
                WHERE id_usuario=" . $_REQUEST['id_usuario'];
        
        // Executa a query
        $res = $conn->query($sql);

        // Verifica se a exclusão foi bem-sucedida
        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-funcionario';</script>";
        }
        break;
}
?>
