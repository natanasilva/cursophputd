    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block"><a href="./index.php" class="nav-link">Início</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block"><a href="https://www.linkedin.com/in/natanasilva/" target="_blank" class="nav-link">Linkedin</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block"><a href="https://github.com/natanasilva" target="_blank" class="nav-link">Github</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-sign-out-alt"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">

              <div class="media">
                <img src="assets/images/app_logo.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Natan Aguiar
                  </h3>
                  <p class="text-sm text-muted"><i class="fas fa-sign-out-alt"></i> Clique para sair</p>
                </div>
              </div>

            </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="./assets/images/app_logo.png" alt="Logo App" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Curso - UTD</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="./assets/images/natan.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="index.php" class="d-block">Natan Aguiar</a>
          </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <ul class="nav nav-treeview">
                <!-- MENU PARA AS AULAS SEMANAIS -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                      Semana 1
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="aula1.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Aula - 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="aula2.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Aula - 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="aula3.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Aula - 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="aula4.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Aula - 4</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- MENU PARA AS ATIVIDADES EXTRAS -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                      Atividades Extras
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="geradordetabela.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Atividade - Tabela</p>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="exercicio_modulo_1.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Exercicio - Módulo I</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- MENU PARA AS AULAS SEMANAIS -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                      Exer. de Progressão
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="questao_1_m_1.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Questao 1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="questao_2_m_1.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Questao 2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="questao_3_m_1.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Questao 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="questao_4_m_1.php" target="_blank" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Questao 4</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="questao_5_m_1.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Questao 5</p>
                      </a>
                    </li>
                  </ul>
                </li>






        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>