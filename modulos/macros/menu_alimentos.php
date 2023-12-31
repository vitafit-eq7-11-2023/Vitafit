<style>
    .table{
        font-size: 12px;
    }
    .thead{
        background-color:#BFEBC5;
    }
    .btn_consulta{
        background-color:#ffffff;
        margin-top: 5px;
        padding:5px 5px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        transition: transform 0.3s ease;
    }
    .btn_consulta:hover{
        transform: scale(1.1);
    }
    .receta{
      background-color:#BFEBC5 ;
      height: 130px;
      margin: 4%;
      border-radius: 10px;
    }
    .recetas{
      background-color:white ;
      border-radius: 10px;
    }
    
</style>
<center>
<div class="col-md-12" id="generar">
<form method="post"action="dashboard.php?mod=menu_alimentos">
  <div class="form-group">
    <br>
    <h3>Alimentos</h3>
    <p>Todos los alimentos de esta lista fueron investigados en fuentes confiables, puedes ver mas acerca de esto aqui: <a href="https://docs.google.com/document/d/18SIuTUwP7zXOR3yaIMZblO7RWN5dWPCr/edit?usp=sharing&ouid=115215555362773953679&rtpof=true&sd=true" class="nav-link text-muted" target="_blank">¡Click!</a></p>
    <div class="row">
      <div class="col-md-10">
        <input type="text" class="form-control" name="txtconsulta" placeholder="Nombre">
      </div>
      <button type="submit" class="btn_consulta col-md-2" name="btn_consulta">Buscar</button>
    </div>
  </div>
</form>
<div class="recetas col-md-11">
<div class="row">
    <?php
      include "conexion.php";
      if (isset($_SESSION['documento'])){
      if(isset($_POST['btn_consulta'])){  
      $dato=$_POST["txtconsulta"];
      $consulta=mysqli_query($conexion,"SELECT * FROM macros WHERE nombre_alimento LIKE '%$dato%';") or die ($conexion."Error en la consulta");
      $cantidad = mysqli_num_rows($consulta);
      if($cantidad > 0){
      while($fila=mysqli_fetch_array($consulta)){
        ?>
        <br>
        <br><br>
        <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
        <div class="nombre_receta">
          <h6><?php echo $fila['nombre_alimento'];?></h6>
          
        </div>
        <form method="post"action="codigo_agregar_calculo.php">
            <input type="text" class="form-control" name="id_alimento" value="<?php echo $fila['id_alimentos'];?>" hidden>
            <input type="text" class="form-control" name="cantidad_alimento" placeholder="Cantidad en gramos(g)"required>
            <button type="submit" class="btn_consulta" name="btn_calculo">Realizar</button>
        </form>
        </div>
        <?php
      }
      }
      }
      else{
        $dato='';
        $consulta=mysqli_query($conexion,"SELECT * FROM macros WHERE nombre_alimento LIKE '%$dato%';") or die ($conexion."Error en la consulta");
        $cantidad = mysqli_num_rows($consulta);
        if($cantidad > 0){
        while($fila=mysqli_fetch_array($consulta)){
          ?>
          <br>
          <br><br>
          <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
          <div class="nombre_receta">
            <h6><?php echo $fila['nombre_alimento'];?></h6>
          </div>
          <form method="post"action="codigo_agregar_calculo.php">
            <input type="text" class="form-control" name="id_alimento" value="<?php echo $fila['id_alimentos'];?>" hidden>
            <input type="text" class="form-control" name="cantidad_alimento" placeholder="Cantidad en gramos(g)"required>
            <button type="submit" class="btn_consulta" name="btn_calculo">Realizar</button>
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