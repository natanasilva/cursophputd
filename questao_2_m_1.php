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
    <link rel="stylesheet" href="/icheck-bootstrap/assets/css/style.css?v=961230cfa62c278771071b89c4640707e8d4d6ac">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />

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
                                <li class="breadcrumb-item active">Questão 2</li>
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
                                    <h3 class="card-title">02 - Crie uma calculadora onde possamos calcular as operações básicas (somar, subtrair, multiplicar e dividir) além de potenciação e raiz quadrada. Use formulários. (2 esc)
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form action="#" name="calculadora" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Insira um numero - valor base (*): <span class="text-danger">*</span> </label><br>
                                                <input type="number" min="0" name="numero1" id="numero1" class="form-control" required placeholder="Insira o primeiro numero (*)">
                                            </div>

                                            <div class="col-md-4">
                                                <label>Insira um numero - expoente: <span class="text-danger">*</span></label><br>
                                                <input type="number" min="0" name="numero2" id="numero2" class="form-control" required placeholder="Insira o segundo numero">
                                            </div>

                                            <div class="col-md-4">
                                                <select name="operacao" class="form-select" aria-label="Escolha uma Operação">
                                                    <option selected>Escolha uma Operação</option>
                                                    <option value="somar">Somar</option>
                                                    <option value="subtrair">Subtrair</option>
                                                    <option value="multiplicar">Multiplicar</option>
                                                    <option value="dividir">Dividir</option>
                                                    <option value="potenciacao">Potenciação</option>
                                                    <option value="raiz">Raiz Quadrada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" name="submit" class="btn btn-primary">Fazer a Operação</button>
                                            </div>
                                        </div>
                                    </form>


                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $n1 = $_POST['numero1'];
                                        $n2 = $_POST['numero2'];
                                        $op = $_POST['operacao'];

                                        switch ($op) {

                                            case 'somar':
                                                $resultado = $n1 + $n2;
                                                echo "O Resultado da  soma é= $resultado";
                                                break;
                                            case 'subtrair':
                                                $resultado = $n1 - $n2;
                                                echo "O Resultado da subtração = $resultado";
                                                break;
                                            case 'multiplicar':
                                                $resultado = $n1 * $n2;
                                                echo "O Resultado da multiplicação é= $resultado";
                                                break;
                                            case 'dividir':
                                                $resultado = $n1 / $n2;
                                                echo "O Resultado da divisão é= $resultado";
                                                break;
                                            case 'potenciacao':
                                                $resultado = $n1 ** $n2;
                                                echo "O Resultado da Potenciação é= $resultado";
                                                break;
                                            case 'raiz':
                                                echo "O Resultado da Raiz Quadrada de " . $n1 . " é = " . sqrt($n1);
                                                echo "<br>";
                                                echo "O Resultado da Raiz Quadrada de " . $n2 . " é = " . sqrt($n2);

                                                break;
                                            default:
                                                echo "Sem resultado - Selecione uma operação";
                                        }
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