<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso UTD - Curso de Linguagem De Programação PHP (60h/A)</title>
    <meta name="author" content="Natan Aguiar - @natanasilva">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <!-- Table style -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="./assets/images/load.gif" alt="AdminPainel" height="60" width="60">
        </div>

        <!-- INCLUINDO A NAV BAR E MENU LATERAL-->
        <?php include("./pages/nav_bar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Aula 3 - Curso de PHP</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active">Aula 3</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Formulário com estilização</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-8 offset-2">
                                            <form action="#" method="">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Formulário de Cadastro
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label> Nome Completo: <span class="text-danger">*</span> </label><br>
                                                                <input type="text" class="form-control" required placeholder="Digite seu nome"><br>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label> Data de Nascimento: <span class="text-danger">*</span></label><br>
                                                                <input type="date" class="form-control" required placeholder="Digite seu email"><br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label> Email: <span class="text-danger">*</span> </label><br>
                                                                <input type="email" class="form-control" required placeholder="Digite seu email"><br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label> Endereço: <span class="text-danger">*</span></label><br>
                                                                <input type="text" class="form-control" required placeholder="Digite seu Endereço"><br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label> Digite sua senha: <span class="text-danger">*</span></label><br>
                                                                <input type="password" class="form-control" required placeholder="Digite seu Endereço"><br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label> Confirme sua senha: <span class="text-danger">*</span></label><br>
                                                                <input type="password" class="form-control" required placeholder="Digite seu Endereço"><br>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-success"> Enviar Dados </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Segunda Página - Tabela - Usando o Plugin DataTables</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">



                                    <div class="row">
                                        <div class="col-10 offset-1">
                                            <table id="TabledoPoder" class="table table-bordered border-primary" id="myTable">
                                                <thead class="text-center bg-dark text-white">
                                                    <th> Nome Completo </th>
                                                    <th> Email </th>
                                                    <th> Telefone </th>
                                                    <th> Endereço </th>
                                                    <th> Nº de Compras </th>
                                                    <th> Ações </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Anthony </td>
                                                        <td> anthony@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 15 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Maria </td>
                                                        <td> Maria@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 9 </td>
                                                        <td>
                                                            <button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-outline-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> João </td>
                                                        <td> joão@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 45 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td> Fatima </td>
                                                        <td> fatima@email.com </td>
                                                        <td> (85) 999544262 </td>
                                                        <td> Rua Bem Ali </td>
                                                        <td> 3 </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <span class="iconify" data-icon="mdi:trash-can-empty" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-warning btn-xs">
                                                                <span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
                                                            </button>

                                                            <button class="btn btn-primary btn-xs">
                                                                <span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot class="text-center">
                                                    <th> Nome Completo </th>
                                                    <th> Email </th>
                                                    <th> Telefone </th>
                                                    <th> Endereço </th>
                                                    <th> Nº de Compras </th>
                                                    <th> Ações </th>
                                                </tfoot>
                                            </table>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#TabledoPoder').DataTable({
                                                        pagingType: 'full_numbers',
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Deseja excluir esse registro? Essa alteração não pode ser desfeita!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não, Sair!</button>
                                                <button type="button" class="btn btn-success">Sim, pode continuar !</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- /.card-body -->


                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; <a href="https://natanet.xyz">NataNet Tecnologia</a> - </strong>
        Todos os direitos reservados.
        <div class="float-right d-none d-sm-inline-block">
            <b>Versão</b> 1.0.0 -
            <?php $today = date("j/n/Y");
            echo date($today); ?>
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes 
  <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes 
    <script src="dist/js/demo.js"></script>-->
    <!-- Page specific script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#TabledoPoder').DataTable({
                "language": {
                    "sProcessing": "Processando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "Não foram encontrados resultados",
                    "sEmptyTable": "Nenhum dado disponivel nesta tabela",
                    "sInfo": "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros de 0 a 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de um total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Carregando...",
                    "oPaginate": {
                        "sFirst": "Primeiro",
                        "sLast": "Último",
                        "sNext": "Seguinte",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Ativar para ordenar a coluna em ordem ascendente",
                        "sSortDescending": ": Ativar para ordenar a coluna em ordem descendente"
                    }
                }
            });
        });
    </script>

</body>

</html>