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
                            <h1 class="m-0">Aula 4 - Curso de PHP</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <li class="breadcrumb-item active">Aula 4</li>
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
                                    <h3 class="card-title">Testando Variáveis</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <?php

                                    # Variáveis	
                                    $nome = "Anthony Jefferson"; // String ou Caracter
                                    $cpf = 60745845879; // Inteiro 
                                    $saldoBancario = -1495.98; // Ponto Flutuante
                                    $ativo = true; // Boleanos 

                                    echo 'Meu nome é $nome <br>';
                                    echo "Meu CPF é $cpf <br>";

                                    echo "<input type='text' name='qualquer' value='teste'>";
                                    echo '<input type="text" name="qualquer" value="teste">';
                                    ?>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testando Variáveis</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">


                                    <?php

                                    # Variáveis	
                                    $nome = "Anthony Jefferson"; // String ou Caracter
                                    $cpf = 60745845879; // Inteiro 
                                    $saldoBancario = -1495.98; // Ponto Flutuante
                                    $ativo = true; // Boleanos 


                                    //$nome = "Jonas Levy";

                                    echo "Meu nome é $nome <br>";
                                    echo "Meu CPF é $cpf <br>";
                                    echo "Meu saldo é $saldoBancario <br>";
                                    echo "Estou ativo: $ativo <br>";


                                    ?>


                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testando os Operadores</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <?php

                                    $a = 4;
                                    $b = 5;

                                    echo $a + $b;
                                    echo "<br>";

                                    echo $a - $b;
                                    echo "<br>";

                                    echo $a * $b;
                                    echo "<br>";

                                    echo $a / $b;
                                    echo "<br>";

                                    # > maior que, < menor que, >= maior igual, <= menor igual
                                    # == iguais, != diferentes, === identico
                                    # Lógicos: E (&&), OU (||), NÃO (!) 

                                    # Testar se a é maior que o B
                                    //if($a > $b){ echo "A é maior"; }else{ echo "B é maior";}

                                    echo ($a > $b) ? "A é maior" : "B é maior";

                                    echo "<hr>";

                                    $a++;
                                    echo "Valor de A: " . $a . "<br>";
                                    $a++;
                                    echo "Valor de A: " . $a . "<br>";
                                    echo "???? Valor de A: " . $a++ . "<br>"; # (??????)
                                    echo "Valor de A: " . $a . "<br>";
                                    echo "Valor de A: " . ++$a . "<br>";


                                    $a += 5; # 13
                                    $a -= 10; # 3
                                    $a *= 10; #30
                                    $a /= 5; # 6


                                    ?>


                                </div>

                            </div>
                            <!-- /.card-body -->



                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testando If e elseif</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <?php

                                    # Problema: Eu quero saber se uma determinada idade é uma idade de criança (se idade <= 12), idade de adolescente (se idade <=18), idade de adulto (se idade <=59) ou idade de idoso (> 59);

                                    $idade = rand(0, 99);

                                    if ($idade < 13) {
                                        echo "Idade: $idade <br>";
                                        echo "CRIANCA";
                                    } else {
                                        if ($idade < 19) {
                                            echo "Idade: $idade <br>";
                                            echo "ADOLESCENTE";
                                        } else {
                                            if ($idade < 60) {
                                                echo "Idade: $idade <br>";
                                                echo "ADULTO";
                                            } else {
                                                echo "Idade: $idade <br>";
                                                echo "IDOSO";
                                            }
                                        }
                                    }
                                    echo "<hr>";
                                    if ($idade < 13) {
                                        echo "Idade: $idade <br>";
                                        echo "CRIANCA";
                                    } elseif ($idade < 19) {
                                        echo "Idade: $idade <br>";
                                        echo "ADOLESCENTE";
                                    } elseif ($idade < 60) {
                                        echo "Idade: $idade <br>";
                                        echo "ADULTO";
                                    } else {
                                        echo "Idade: $idade <br>";
                                        echo "IDOSO";
                                    }



                                    ?>

                                </div>

                            </div>
                            <!-- /.card-body -->


                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testando o If(){}</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <?php

                                    # Problema: Como saber se determinada idade pode comprar cerveja
                                    # Solução:  Caso a idade do elemento seja maior do que 18 então pode comprar cerveja

                                    /*
    if($condição){
        // Resultado da condição	
    }
*/

                                    $idade = 19;

                                    if ($idade > 18) {
                                        echo "Pode pegar a Heineker na geladeira!";
                                    }



                                    ?>



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