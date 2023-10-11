<h1>Rutinas</h1>
<p>En este espacio te ofrecemos una gran variedad de opciones para mantener tu condicion fisica.</p>

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
        <p class="col-md-8 fs-4" style="color:#FFFFFF;">¡Hace un buen dia para hacer ejercicio ¿verdad?!</p>
        <button class="btn btn-primary btn-lg" type="button">¡Vamos!</button>

      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6" id="postre">
        <div class="h-100 p-5 text-bg-clear rounded-3">
          <h2 class="fw-bold">Joga</h2>
          <p>¿Te apetece estirar un poco?</p>
          <button class="btn btn-outline-light" type="button">¡Vamos!</button>
        </div>
      </div>
      <div class="col-md-6" id="snack">
        <div class="h-100 p-5 bg-clear-tertiary text-dark rounded-3">
          <h2 class="fw-bold">Cardio</h2>
          <p>¿Y si nos movemos un poco?</p>
          <button class="btn btn-outline-secondary" type="button">¡Vamos!</button>
        </div>
      </div>
    </div>

    <style>
    .table{
        font-size: 12px;
    }
    .thead{
        background-color:#BFEBC5;
    }
    .btn_consulta{
        background-color:#ffffff;
        padding: 10px 20px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .btn_consulta:hover{
        transform: scale(1.1);
    }
    .receta{
      background-color:#BFEBC5 ;
      height: 200px;
      margin: 4%;
      border-radius: 10px;
    }
    .recetas{
      background-color:white ;
      border-radius: 10px;
    }
    
</style>
<center>
<div class="col-md-12">
<form method="post"action="dashboard.php?mod=recetas">
  <div class="form-group">
    <br>
    <h3>Recetas</h3>
    <div class="row">
      <div class="col-md-10">
        <input type="text" class="form-control" name="txtconsulta" placeholder="Nombre">
      </div>
      <button type="submit" class="btn_consulta col-md-2" name="btn_consulta">Buscar</button>
    </div>
  </div>
</forms>
<div class="recetas col-md-11">
<div class="row">
    <?php
      include "conexion.php";
      if (isset($_SESSION['documento'])){
        if(isset($_POST['btn_receta'])){
          echo "<script>window.location='dashboard.php?mod=info_receta';</script>";
        }
      if(isset($_POST['btn_consulta'])){  
      $dato=$_POST["txtconsulta"];
      $consulta=mysqli_query($conexion,"SELECT * FROM  WHERE nombre LIKE '%$dato%';") or die ($conexion."Error en la consulta");
      $cantidad = mysqli_num_rows($consulta);
      if($cantidad > 0){
      while($fila=mysqli_fetch_array($consulta)){
        ?>
        <br>
        <br><br>
        <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
        <div class="nombre_receta">
          <h6><?php echo $fila['nombre'];?></h6>
        </div>
        <form method="post"action="dashboard.php?mod=info_receta">
        <input type="text" class="form-control" name="nombre_receta" value="<?php echo $fila['nombre'];?>" hidden>
        <button type="submit" class="btn_consulta col-md-2" name="btn_receta"></button>
        </form>
        </div>
        <?php
      }
      }
      }
      else{
        $dato='';
        $consulta=mysqli_query($conexion,"SELECT * FROM receta WHERE nombre LIKE '%$dato%';") or die ($conexion."Error en la consulta");
        $cantidad = mysqli_num_rows($consulta);
        if($cantidad > 0){
        while($fila=mysqli_fetch_array($consulta)){
          ?>
          <br>
          <br><br>
          <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
          <div class="nombre_receta">
            <h6><?php echo $fila['nombre'];?></h6>
          </div>
          <form method="post"action="dashboard.php?mod=info_receta">
          <input type="text" class="form-control" name="nombre_receta" value="<?php echo $fila['nombre'];?>" hidden>
          <button type="submit" class="btn_consulta col-md-2" name="btn_receta"></button>
          </form>
          </div>
          <?php
        }
      }
      } 
      }
      
    ?>
</div>
</div>
</div>
</center>
</div>