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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Exercicio de Progressão de Módulo - Curso de PHP</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active">Questão 3</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">03 - Crie um pequeno sistema onde seja possível receber um valor e um numero de parcelas. Também, incremente uma data mensal para que tal parcela seja paga (use apenas o mês). Use formulários para receber os dados e uma tabela para exibir os dados resultantes com as colunas: Data de Vencimento, Número da Parcela, Valor Parcela. (3 esc)
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form action="#" name="calculadora" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Valor da parcela (*): <span class="text-danger">*</span> </label><br>
                                                <input type="number" min="0" name="valor" id="valor" class="form-control" required placeholder="Digite ovalor da parcela (*)">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Numero de parcelas: <span class="text-danger">*</span></label><br>
                                                <input type="number" min="0" name="numeroparcelas" id="numeroparcelas" class="form-control" required placeholder="Digite a quantidade de parcelas">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Data de Vencimento: <span class="text-danger">*</span></label><br>
                                                <input type="date" name="data" id="data" class="form-control" required placeholder="Digite a quantidade de parcelas">
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" name="submit" class="btn btn-primary">Gerar </button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['submit'])) {

                                        $valor = $_POST["valor"];
                                        $parcelas = $_POST["numeroparcelas"];
                                        $data = $_POST["data"];
                                        $qtdDias = 0;
                                        echo '
                                        <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td>ID</td>
                                                <td>Numero da Parcela</td>
                                                <td>Valor da Parcela</td>
                                                <td>Data de Vencimento</td>
                                            </tr><tr>';
                                        for ($l = 1; $l <= $parcelas; $l++) {
                                            $resultado = date('d/m/Y', strtotime("+{$qtdDias} days",strtotime($data)));
                                            echo '
                                                <tr>
                                                    <td>' . $l . '</td>
                                                    <td>' . $l . '</td>
                                                    <td> R$ ' . number_format($valor, 2, ',', '.') . '</td>
                                                    <td>' . $resultado . '</td>
                                                </tr>';
                                                $qtdDias += 30;
                                        }
                                        echo "</table>";
                                    }
                                    ?>

                                </div>

                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

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
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->

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
            $('#Table').DataTable({
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