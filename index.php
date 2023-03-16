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
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminPainel" height="60" width="60">
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
              <h1 class="m-0">Página de Início - do Curso de PHP</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                <li class="breadcrumb-item active">Aula 1</li>
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
                  <h3 class="card-title">Curso de Linguagem De Programação PHP (60h/A) - 19:00 Às 21:00 (06/03 À 18/04/2023)</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Info boxes -->

                  <div class="row">



                    <div class="col-12" id="accordion">
                      <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                              1. CURSO
                            </h4>
                          </div>
                        </a>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            <p>O curso tem por finalidade, introduzir os conceitos básicos, fundamentais e avançados para o desenvolvimento
                              de sistemas Web com a Linguagem PHP, permitindo que os alunos tenham uma visão geral de como funciona um
                              ambiente de desenvolvimento dos códigos, algoritmos e lógica com PHP tendo sempre em vista a ideia de prepará-lo
                              para o mercado de trabalho. Apesar de não ser um requisito obrigatório, os conhecimentos básicos de design web serão
                              interessantes pois o curso abordará e utilizará vários recursos e sempre que se mostrar relevante para a criação de
                              projetos gráficos, haverá necessidade desse conhecimento básico.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                              2. CONTEÚDO PROGRAMÁTICO:
                            </h4>
                          </div>
                        </a>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                          <div class="card-body">

                            <h4 id="alinhamento-de-texto">Módulo I – Revisão Prática</h4>
                            <ul>
                              <li>
                                <p>Unidade I – Apresentação do curso, apresentação das ferramentas de trabalho.</p>
                              </li>
                              <li>
                                <p>Unidade II – Instalação, configuração e teste das ferramentas utilizadas.</p>
                              </li>
                              <li>
                                <p>Unidade III – Construindo algoritmos e revisando conceitos.</p>
                              </li>
                              <li>
                                <p>Unidade IV – Revisando estruturas e funções.</p>
                              </li>
                              <li>
                                <p>Unidade V – Trabalhando com Arrays e POO.</p>
                              </li>
                            </ul>

                            <h4 id="alinhamento-de-texto">Módulo II – Manipulando arquivos com PHP.</h4>
                            <ul>
                              <li>
                                <p>Unidade I – Manipulando arquivos TXT.</p>
                              </li>
                              <li>
                                <p>Unidade II – Manipulando CSV’s.</p>
                              </li>
                              <li>
                                <p>Unidade III – Construindo uma aplicação prática.</p>
                              </li>
                            </ul>
                            <h4 id="alinhamento-de-texto">Módulo III – Banco de Dados</h4>
                            <ul>
                              <li>
                                <p>Unidade I – Revisando o CRUD.</p>
                              </li>
                              <li>
                                <p>Unidade II – Criando uma conexão com PDO.</p>
                              </li>
                              <li>
                                <p>Unidade III – Construindo uma classe de conexão dinâmica.</p>
                              </li>
                              <li>
                                <p>Unidade IV – Construindo uma aplicação prática.</p>
                              </li>
                            </ul>
                            <h4 id="alinhamento-de-texto">Módulo IV – Frameworks e APIS.</h4>
                            <ul>
                              <li>
                                <p>Unidade I – O que é um Framework?</p>
                              </li>
                              <li>
                                <p>Unidade II – Frameworks Atuais.</p>
                              </li>
                              <li>
                                <p>Unidade III – O que é uma API?</p>
                              </li>
                              <li>
                                <p>Unidade IV – Entendendo o JSON.</p>
                              </li>
                              <li>
                                <p>Unidade V – Construindo API’s.</p>
                              </li>
                              <li>
                                <p>Unidade VI – Construindo uma aplicação prática com Frameworks e API’s.</p>
                              </li>
                            </ul>
                            <h4 id="alinhamento-de-texto">Módulo V – Construindo um projeto prático.</h4>
                            <ul>
                              <li>
                                <p>Unidade I – Projetando um pequeno projeto prático com os conhecimentos adquiridos no curso.</p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                              3. METODOLOGIA DE ENSINO:
                            </h4>
                          </div>
                        </a>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>As aulas serão expositivas com a utilização de tecnologias que permitem o uso do ensino a distância, como
                              também de uma plataforma AVA para postagem dos principais materiais do curso, permitindo assim o diálogo sobre
                              vivências do mercado de trabalho durante todo o curso. Serão aplicados exercícios para fixação do conhecimento
                              durante a aula e para serem feitos em casa, assim os alunos poderão demonstrar os conhecimentos adquiridos durante o
                              curso.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                              4. AVALIAÇÕES
                            </h4>
                          </div>
                        </a>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>As avaliações serão entendidas como parte do processo de formação, através da identificação de habilidades e
                              competências desenvolvidas durante o curso. Serão levadas em consideração a participação, utilização de ferramentas
                              digitais e realização de exercícios.<br>
                            <h5>Formas de avaliação:</h5>
                            <ul>
                              <li><strong>Frequência:</strong> Será medida através da participação do aluno na plataforma, através das “Aulas” e “Atividades”.
                                Ao final do curso é necessário que o aluno tenha atingido frequência igual ou superior à 75% para ser
                                “<strong class="text-info">Aprovado</strong>”, caso a frequência do aluno seja inferior, o resultado será “<strong class="text-danger">Reprovado</strong>”.</li>
                              <li><strong>Média:</strong> O aluno será avaliado módulo a módulo, através das atividades de “Progressão de Módulo” e
                                “Projeto Final”. Ao final Do curso é necessário que o aluno tenha atingido média igual ou superior à 60%
                                para ser “<strong class="text-info">Aprovado</strong>”.</li>
                              <li><strong class="text-danger">Avaliação Final sobre o Curso (ATENÇÃO):</strong> O aluno terá que avaliar o curso, dizer suas impressões, através
                                de questionamento objetivo e subjetivo.</li>
                            </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                              5. CERTIFICAÇÃO
                            </h4>
                          </div>
                        </a>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>A Universidade do Trabalho Digital – <strong>UTD</strong> é uma iniciativa do Governo do Estado, através da Secretaria da
                              Ciência, Tecnologia e Educação Superior <strong>(SECITECE)</strong> que desenvolve as suas atividades em parceria com Instituto
                              Centro de Ensino Tecnológico <strong>(CENTEC)</strong>.
                              Os certificados serão emitidos pelo CENTEC e assinados por ambos <strong>(CENTEC e SECITECE)</strong>. Apenas terá
                              direito à certificação, os alunos que obtiverem resultado “<strong class="text-info">Aprovado</strong>” ao final do curso.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card card-primary card-outline">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                          <div class="card-header">
                            <h4 class="card-title w-100">
                              6. ATIVIDADES NA PLATAFORMA
                            </h4>
                          </div>
                        </a>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            <p>A plataforma utilizada contém “Trilha de Aprendizagem”, o conteúdo posterior só poderá ser acessado após a
                              conclusão do seu antecessor. O aluno deve seguir uma linha de raciocínio lógico para que a experiência e aprendizado
                              não sejam comprometidos.
                            <ul>
                              <li><strong>Módulo:</strong> Traz o conteúdo geral que será trabalhado durante aquele período específico, subdividido em
                                “Aulas”;</li>
                              <li><strong>Aula:</strong> Traz todo o material e o acesso à aula ao vivo que tratará do conteúdo específico do tema que será
                                trabalhado, subdividida em diversos elementos:</li>
                              <ul>
                                <li><strong>Aula ao Vivo:</strong> Aula em vídeo com conteúdo teórico previsto para o tema abordado. Ocorre de Segunda a
                                  Sexta-feira, tem horárioespecífico para acontecer e contam como forma de cálculo para a Frequência.
                                  Essas aulas acontecem na plataforma Google Meet e o link para acesso será disponibilizado pelo Instrutor
                                  Tutor na plataforma.</li>
                                <li><strong>Slides (Download):</strong> Disponibilização de download do arquivo contendo os slides das “Aulas ao Vivo”;</li>
                                <li><strong>Apostila do Curso (Download):</strong> Estará disponível a partir do primeiro “Módulo” do curso;</li>
                                <li><strong>Exercício de Progressão de Módulo:</strong> Ao final de todo “Módulo” os alunos deverão responder uma
                                  avaliação contendo 10 questões. Essa avaliação é extremamente importante, o aluno deve atingir média
                                  igual ou superior à requisitada para conseguir status de “Aprovado” e progredir no curso, caso contrário,
                                  será “<strong class="text-danger">Reprovado</strong>”;</li>
                                <li><strong class="text-danger">Avaliação Final do Curso (Conforme Tópico 4).</strong></li>
                              </ul>
                            </ul>
                            <ul>
                              <li><strong>Projeto Final:</strong> Módulo voltado para descrever em etapas, a atividade que o aluno deverá realizar aplicando
                                todo o conteúdo visto.</li>
                              <ul>
                                <li><strong>Aula ao Vivo sobre o Projeto:</strong> Voltada para interação do professor com a turma para tirar dúvidas
                                  referentes ao projeto;</li>
                                <li><strong>Entrega de Trabalho:</strong> Espaço voltado para compartilhamento do resultado final do projeto com o
                                  “Instrutor Tutor”;</li>
                                <li><strong class="text-danger">Avaliação Final do Curso (Conforme Tópico 4).</strong></li>
                              </ul>
                            </ul>
                            </p>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
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