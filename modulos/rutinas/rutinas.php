<h1>Rutinas</h1>
<p>En este espacio te ofrecemos una gran variedad de opciones para mantener tu condición física.</p>

<div class="p-5 mb-4 bg-body-tertiary rounded-3" id="desayunito">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bd-violet-bg);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bd-violet-bg);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
     
      #desayunito{
        background-image: url(modulos/img/rutina.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        filter: brightness(0.6);
        position: relative;
      }

      #postre{
        background-image: url(modulos/img/joga.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        filter: brightness(0.6);
      }

      #snack{
        background-image: url(modulos/img/cardio.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        filter: brightness(0.6);
      }
    </style>
  
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold" style="color:#FFFFFF;">Tu rutina</h1>
        <p class="col-md-8 fs-4" style="color:#FFFFFF;">¡Hace un buen día para hacer ejercicio! ¿verdad?</p>
        <a 
        <?php
        $documento=$_SESSION['documento'];
        $consulta = mysqli_query($conexion,"SELECT * FROM rutina WHERE numero_identificacion LIKE '%$documento%';") or die ($conexion."Error en la consulta");
        if($fila=mysqli_fetch_array($consulta)){
          $numero_rutina=$fila['id_rutina'];
          $consulta_lista = mysqli_query($conexion,"SELECT * FROM lista_rutina WHERE id_rutina LIKE '%$numero_rutina%';") or die ($conexion."Error en la consulta");
          $cantidad = mysqli_num_rows($consulta_lista);
          if($cantidad > 0){
            echo "href='dashboard.php?mod=rutina_pro'";
          }else{
            echo "href='dashboard.php?mod=selector_rutina'";
          }
        }
        ?>
        >
        <button class="btn btn-primary btn-lg" type="button">¡Vamos!</button>
        </a>
      </div>
    </div>