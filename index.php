<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Controle Clínico</title>
    <!-- Inclusão do CSS do Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Link para a página inicial com ícone -->
        <a class="navbar-brand" href="index.php" style="color: red;">
            <i class="fa-solid fa-hospital fa-2x"></i>
        </a>
        <!-- Botão de menu para dispositivos menores -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Itens do menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Link para a página inicial -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- Menu dropdown para Médicos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Médicos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
                    </ul>
                </li>
                <!-- Menu dropdown para Pacientes -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pacientes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
                    </ul>
                </li>
                <!-- Menu dropdown para Consultas -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Consultas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
                    </ul>
                </li>
                <!-- Menu dropdown para Funcionários -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Funcionários
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Conteúdo principal -->
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <?php
            // Conexão com o banco de dados
            include('config.php');

            // Verifica a página solicitada na URL e inclui o arquivo correspondente
            switch (@$_REQUEST['page']) {
                case 'cadastrar-medico':
                    include('cadastrar-medico.php');
                    break;
                case 'editar-medico':
                    include('editar-medico.php');
                    break;
                case 'listar-medico':
                    include('listar-medico.php');
                    break;
                case 'salvar-medico':
                    include('salvar-medico.php');
                    break;
                case 'cadastrar-paciente':
                    include('cadastrar-paciente.php');
                    break;
                case 'editar-paciente':
                    include('editar-paciente.php');
                    break;
                case 'listar-paciente':
                    include('listar-paciente.php');
                    break;
                case 'salvar-paciente':
                    include('salvar-paciente.php');
                    break;
                case 'cadastrar-consulta':
                    include('cadastrar-consulta.php');
                    break;
                case 'editar-consulta':
                    include('editar-consulta.php');
                    break;
                case 'listar-consulta':
                    include('listar-consulta.php');
                    break;
                case 'salvar-consulta':
                    include('salvar-consulta.php');
                    break;
                case 'cadastrar-funcionario':
                    include('cadastrar-funcionario.php');
                    break;
                case 'editar-funcionario':
                    include('editar-funcionario.php');
                    break;
                case 'listar-funcionario':
                    include('listar-funcionario.php');
                    break;
                case 'salvar-funcionario':
                    include('salvar-funcionario.php');
                    break;
                default:
                    include('home.php');
            }
            ?>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/a8ff69fe85.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
