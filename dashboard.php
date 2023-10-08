<?php
//Iniciamos session
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="dashboard/media/vitafit_logo.png">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.3/css/boxicons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
  <title>
    Inicio
  </title>


  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />

  <link id="pagestyle" href="dashboard/assets/css/dashboards.css?v=1.0.7" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Dashboard -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand" href="dashboard.php?mod=inicio">
        <img src="dashboard/media/vitafit_logo.png" alt="main_logo" style="height:3000px;">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=inicio">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="home-alt-2" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Inicio</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=recetas">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="book" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Recetas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=rutinas">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="time" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Rutinas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=p_alimenticio">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="spreadsheet" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Plan alimenticio</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=seguimiento">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="chart" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Seguimiento</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=calendario">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="calendar-edit" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Calendario</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?mod=calculadora">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="math" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1">Calculadora</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php?set=m_profile">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <box-icon type="regular" name="user" color="black" size="22px"></box-icon>
            </div>
            <span class="nav-link-text ms-1"><?php echo $_SESSION['primer_nombre']," ",$_SESSION['primer_apellido']; ?><span>
          </a>
        </li>
        <?php
        if(@ $_GET['set']=="m_profile")
        {
          require_once("modulos/m_profile.php");
        }
        ?>
      </ul>
    </div>
  </aside>
 
  <!-- Final dashboard -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Encabezado -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;" style="color: #BFEBC5; ">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
            <?php
        if(@ $_GET['mod']=="")
        {
          echo"Inicio";
        }
        else
            if(@ $_GET['mod']=="inicio")
            {
              echo"Inicio";
            }
            else
                if(@ $_GET['mod']=="recetas")
                {
                  echo"Recetas";
                }
                else
                    if(@ $_GET['mod']=="rutinas")
                    {
                      echo"Rutinas";
                    }
                    else
                        if(@ $_GET['mod']=="p_alimenticio")
                        {
                          echo"Plan alimenticio";
                        }
                        else
                            if(@ $_GET['mod']=="seguimiento")
                            {
                              echo"Seguimiento";
                            }
                            else
                                if(@ $_GET['mod']=="cuenta")
                                {
                                  echo"Cuenta";
                                }
                                else
                                    if(@ $_GET['mod']=="calendario")
                                    {
                                      echo"Calendario";
                                    }
                                    else
                                        if(@ $_GET['mod']=="calculadora")
                                        {
                                          echo"Contador de macros";
                                        }
                                        else
                                          if(@ $_GET['mod']=="usuarios")
                                          {
                                            echo"Usuarios";
                                          }
                                          else
                                            if(@ $_GET['mod']=="gestionar")
                                            {
                                              echo"Gestionar";
                                            }
            
      ?>
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">
          <?php
        if(@ $_GET['mod']=="")
        {
          echo"Inicio";
        }
        else
            if(@ $_GET['mod']=="inicio")
            {
              echo"Inicio";
            }
            else
                if(@ $_GET['mod']=="recetas")
                {
                  echo"Recetas";
                }
                else
                    if(@ $_GET['mod']=="rutinas")
                    {
                      echo"Rutinas";
                    }
                    else
                        if(@ $_GET['mod']=="p_alimenticio")
                        {
                          echo"Plan alimenticio";
                        }
                        else
                            if(@ $_GET['mod']=="seguimiento")
                            {
                              echo"Seguimiento";
                            }
                            else
                                if(@ $_GET['mod']=="cuenta")
                                {
                                  echo"Cuenta";
                                }
                                else
                                    if(@ $_GET['mod']=="calendario")
                                    {
                                      echo"Calendario";
                                    }
                                    else
                                        if(@ $_GET['mod']=="calculadora")
                                        {
                                          echo"Contador de macros";
                                        }
                                        if(@ $_GET['mod']=="usuarios")
                                          {
                                            echo"Usuarios";
                                          }
                                          else
                                            if(@ $_GET['mod']=="gestionar")
                                            {
                                              echo"Gestionar";
                                            }
            
      ?>
          </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Final encabezado -->
    <!-- Espacio div principal -->
    <div class="container-fluid py-4" style=" background-color: #BFEBC5;">
      <?php
        if(@ $_GET['mod']=="")
        {
          require_once("modulos/inicio.php");
        }
        else
            if(@ $_GET['mod']=="inicio")
            {
              require_once("modulos/inicio.php");
            }
            else
                if(@ $_GET['mod']=="recetas")
                {
                  require_once("modulos/recetas.php");
                }
                else
                    if(@ $_GET['mod']=="rutinas")
                    {
                      require_once("modulos/rutinas.php");
                    }
                    else
                        if(@ $_GET['mod']=="p_alimenticio")
                        {
                          require_once("modulos/p_alimenticio.php");
                        }
                        else
                            if(@ $_GET['mod']=="seguimiento")
                            {
                              require_once("modulos/seguimiento.php");
                            }
                            else
                                if(@ $_GET['mod']=="cuenta")
                                {
                                  require_once("modulos/cuenta.php");
                                }
                                else
                                    if(@ $_GET['mod']=="calendario")
                                    {
                                      require_once("modulos/calendario.php");
                                    }
                                    else
                                        if(@ $_GET['mod']=="calculadora")
                                        {
                                          require_once("modulos/calculadora.php");
                                        }
                                        else
                                            if(@ $_GET['mod']=="usuarios")
                                            {
                                              require_once("modulos/usuarios.php");
                                            }
                                            else
                                                if(@ $_GET['mod']=="gestionar")
                                                {
                                                  require_once("modulos/gestionar.php");
                                                }
                                                else
                                                  if(@ $_GET['mod']=="info_receta")
                                                  {
                                                    require_once("modulos/info_receta.php");
                                                  }
            
      ?>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by Ozanam Students for a better life
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://instagram.com/vitafit_fo" class="nav-link text-muted" target="_blank">Vitafit</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Final div principal -->
  </main>

</body>

</html>