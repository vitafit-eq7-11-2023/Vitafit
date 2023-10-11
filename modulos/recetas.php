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