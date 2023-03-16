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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Exercicio de Progressão de Módulo - Curso de PHP</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active">Questão 1</li>
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
                                    <h3 class="card-title">Questão 1 - Crie um algoritmo onde sejam digitados 10 números e exiba-os na ordem crescente. (1 esc)
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form action="#" name="gerarTabela" method="post" enctype="multipart/form-data">
                                        <div id="step_1" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 1º Numero:</label>
                                                <input type="number" name="numero1" id="numero1" class="form-control" placeholder="Digite aqui o seu primeiro numero">
                                            </div>
                                        </div>
                                        <div id="step_2" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 2º Numero:</label>
                                                <input type="number" name="numero2" id="numero2" class="form-control" placeholder="Digite aqui o seu segundo numero">
                                            </div>
                                        </div>
                                        <div id="step_3" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 3º Numero:</label>
                                                <input type="number" name="numero3" id="numero3" class="form-control" placeholder="Digite aqui o seu terceiro numero">
                                            </div>
                                        </div>
                                        <div id="step_4" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 4º Numero:</label>
                                                <input type="number" name="numero4" id="numero4" class="form-control" placeholder="Digite aqui o seu quarto numero">
                                            </div>
                                        </div>
                                        <div id="step_5" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 5º Numero:</label>
                                                <input type="number" name="numero5" id="numero5" class="form-control" placeholder="Digite aqui o seu quinto numero">
                                            </div>
                                        </div>
                                        <div id="step_6" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 6º Numero:</label>
                                                <input type="number" name="numero6" id="numero6" class="form-control" placeholder="Digite aqui o seu sexto numero">
                                            </div>
                                        </div>
                                        <div id="step_7" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 7º Numero:</label>
                                                <input type="number" name="numero7" id="numero7" class="form-control" placeholder="Digite aqui o seu sétimo numero">
                                            </div>
                                        </div>
                                        <div id="step_8" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 8º Numero:</label>
                                                <input type="number" name="numero8" id="numero8" class="form-control" placeholder="Digite aqui o seu oitavo numero">
                                            </div>
                                        </div>
                                        <div id="step_9" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 9º Numero:</label>
                                                <input type="number" name="numero9" id="numero9" class="form-control" placeholder="Digite aqui o seu nono numero">
                                            </div>
                                        </div>
                                        <div id="step_10" class="step">
                                            <div class="form-group">
                                                <label for="nome">Digite o Seu 10º Numero:</label>
                                                <input type="number" name="numero10" id="numero10" class="form-control" placeholder="Digite aqui o seu décimo numero">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn btn-primary">Enviar Numeros</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <button class="btn btn-block btn-secondary" id="prev">Anterior</button>
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-block btn-secondary" id="next">Próximo</button>
                                        </div>
                                    </div>

                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $numeros[0] = $_POST['numero1'];
                                        $numeros[1] = $_POST['numero2'];
                                        $numeros[2] = $_POST['numero3'];
                                        $numeros[3] = $_POST['numero4'];
                                        $numeros[4] = $_POST['numero5'];
                                        $numeros[5] = $_POST['numero6'];
                                        $numeros[6] = $_POST['numero7'];
                                        $numeros[7] = $_POST['numero8'];
                                        $numeros[8] = $_POST['numero9'];
                                        $numeros[9] = $_POST['numero10'];
                                        sort($numeros);
                                        foreach ($numeros as $numero) {
                                            echo "$numero<br>";
                                        }
                                        echo "<br>";
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            //Esconde todos os passos e exibe o primeiro ao carregar a página 
            $('.step').hide();
            $('.step').first().show();

            //Exibe no topo em qual passo estamos pela ordem da div que esta visivel
            var passoexibido = function() {
                var index = parseInt($(".step:visible").index());
                if (index == 0) {
                    //Se for o primeiro passo desabilita o botão de voltar
                    $("#prev").prop('disabled', true);
                } else if (index == (parseInt($(".step").length) - 1)) {
                    //Se for o ultimo passo desabilita o botão de avançar
                    $("#next").prop('disabled', true);
                } else {
                    //Em outras situações os dois serão habilitados
                    $("#next").prop('disabled', false);
                    $("#prev").prop('disabled', false);
                }
                $("#passo").html(index + 1);

            };

            //Executa a função ao carregar a página
            passoexibido();

            //avança para o próximo passo
            $("#next").click(function() {
                $(".step:visible").hide().next().show();
                passoexibido();
            });

            //retrocede para o passo anterior
            $("#prev").click(function() {
                $(".step:visible").hide().prev().show();
                passoexibido();
            });

        });
    </script>
</body>

</html>