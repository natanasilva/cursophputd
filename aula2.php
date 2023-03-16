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
                            <h1 class="m-0">Aula 2 - Curso de PHP</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active">Aula 2</li>
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
                                    <h3 class="card-title">Formulário sem estilização</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form action="" method="">

                                        <label> Nome Completo: </label><br>
                                        <input type="text" placeholder="Digite seu nome"><br><br>

                                        <label> Email: </label><br>
                                        <input type="email" placeholder="Digite seu email"><br><br>

                                        <label> Data de Nascimento: </label><br>
                                        <input type="date" placeholder="Digite seu email"><br><br>

                                        <label> Endereço: </label><br>
                                        <input type="text" placeholder="Digite seu Endereço"><br><br>

                                        <label> Número da Casa: </label><br>
                                        <input type="number" min=0 max=9999 step=0.1><br><br>

                                        <label> Sexo: </label><br>
                                        <input type="radio" value="M" name="sexo" checked> Masculino
                                        <input type="radio" value="F" name="sexo"> Feminino
                                        <br><br>

                                        <label> Escolaridade </label><br>
                                        <select>
                                            <option> Fundamental </option>
                                            <option> Médio </option>
                                            <option> Superior </option>
                                        </select> <br><br>

                                        <label> Fale um pouco sobre você </label><br>
                                        <textarea></textarea><br><br>

                                        <label> Concordo com os termos </label><br>
                                        <input type="checkbox" name=""> Termo de Adesão <br>
                                        <input type="checkbox" name=""> Termo de Pagamento <br>
                                        <input type="checkbox" name=""> Termo de LGPD <br>

                                        <br><br>
                                        <input type="submit" value="Enviar os Dados">


                                    </form>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Segunda Página - Tabela - Linhas e Colunas</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-6" style="background-color: red">
                                            Column 1
                                            <div class="row">
                                                <div class="col-6" style="background-color: pink"> 1.1 </div>
                                                <div class="col-6" style="background-color: pink"> 1.2 </div>
                                            </div>
                                        </div>
                                        <div class="col-2" style="background-color: blue">
                                            Column 2
                                        </div>
                                        <div class="col-1" style="background-color: green">
                                            Column 3
                                        </div>
                                        <div class="col-3" style="background-color: black">
                                            Column 4
                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->


                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Terceira Página - Formulario de Cadstro com class do Bootsrap</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">



                                        <div class="row">
                                            <div class="col-8 offset-2">
                                                <form action="" method="">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            Formulário de Cadastro
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <label> Nome Completo: </label><br>
                                                                    <input type="text" class="form-control" placeholder="Digite seu nome"><br>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label> Data de Nascimento: </label><br>
                                                                    <input type="date" class="form-control" placeholder="Digite seu email"><br>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label> Email: </label><br>
                                                                    <input type="email" class="form-control" placeholder="Digite seu email"><br>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label> Endereço: </label><br>
                                                                    <input type="text" class="form-control" placeholder="Digite seu Endereço"><br>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <a href="#" class="btn btn-primary">Me Cadastrar</a>
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
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>