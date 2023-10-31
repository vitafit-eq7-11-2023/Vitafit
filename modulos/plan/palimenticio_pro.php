<style>
    .receta{
      background-color:#fff;
      height: 200px;
      margin: 4%;
      border-radius: 10px;
    }
    .btn_consulta{
      background-color:#BFEBC5;
        padding:10px 20px;
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
    .btn_dias{
      background-color:#fff;
        width: 120px;
        height: 50px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin:7px;
        transition: transform 0.3s ease;
    }
    .btn_dias:hover{
        transform: scale(1.1);
    }
    .form_dias{
      margin: 24.5px;
    }
</style>
<center>
<h1>Tu plan alimenticio</h1>
<p>Recuerda consultar con un especialista los datos que te suministramos </p>
<div class="row">
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="1" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 1</button>
  </form>
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="2" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 2</button>
  </form>  
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="3" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 3</button>
  </form>
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="4" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 4</button>
  </form>
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="5" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 5</button>
  </form>
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="6" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 6</button>
  </form>
  <form action="dashboard.php?mod=palimenticio_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="7" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 7</button>
  </form>
</div>
<br>
<?php
     if(isset($_POST["btn_dias"])){
        $dia=$_POST['dia'];
        $documento=$_SESSION['documento'];
        $consulta = mysqli_query($conexion,"SELECT * FROM plan_alimenticio WHERE numero_identificacion LIKE '%$documento%';") or die ($conexion."Error en la consulta");
        if($fila=mysqli_fetch_array($consulta)){
          $numero_plan=$fila['id_plan'];
          $consulta_lista = mysqli_query($conexion,"SELECT * FROM lista_plan WHERE id_plan = '$numero_plan' AND dia_consumo = '$dia';") or die ($conexion."Error en la consulta");
          $cantidad = mysqli_num_rows($consulta_lista);
          if($cantidad > 0){
            ?>
            <h3><?php echo "Dia ",$dia;?></h3>
            <div class="row">
            <?php
            while($fila=mysqli_fetch_array($consulta_lista)){
                $receta=$fila['id_receta'];
                $consulta=mysqli_query($conexion,"SELECT * FROM receta WHERE id_receta = '$receta';") or die ($conexion."Error en la consulta");
                while($fila=mysqli_fetch_array($consulta)){
                  ?>
                  <br>
                  <br><br>
                  <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
                  <div class="nombre_receta">
                    <h6><?php echo $fila['nombre'];?></h6>
                  </div>
                  <div>
                    <p><?php
                    if($fila[''])
                    ?></p>
                  </div>
                  <form method="post"action="dashboard.php?mod=info_receta">
                  <input type="text" class="form-control" name="nombre_receta" value="<?php echo $fila['nombre'];?>" hidden>
                  <button type="submit" class="btn_consulta" name="btn_receta">Preparar</button>
                  </form>
                  </div>
                  <?php
                }
              }
              ?>
              </div>
              <form action="dashboard.php?mod=palimenticio_pro" method="POST">
                <input type="text" name="dia" value="<?php echo $dia; ?>" hidden>
                <input type="text" name="id_plan" value="<?php echo $numero_plan; ?>" hidden>
                <button type="submit" name="btn_completado" class="btn_dias">Completado</button>
              </form>
              <?php
            }
          }
        }else{
          $documento=$_SESSION['documento'];
        $consulta = mysqli_query($conexion,"SELECT * FROM plan_alimenticio WHERE numero_identificacion LIKE '%$documento%';") or die ($conexion."Error en la consulta");
        if($fila=mysqli_fetch_array($consulta)){
          $numero_plan=$fila['id_plan'];
          $consulta_lista = mysqli_query($conexion,"SELECT * FROM lista_plan WHERE id_plan = '$numero_plan' AND completada = '1' AND dia_consumo = '1';") or die ($conexion."Error en la consulta");
          $cantidad = mysqli_num_rows($consulta_lista);
          if($cantidad > 0){
            ?>
            <h3><?php echo "Dia 1";?></h3>
            <div class="row">
            <?php
            while($fila=mysqli_fetch_array($consulta_lista)){
                $receta=$fila['id_receta'];
                $consulta=mysqli_query($conexion,"SELECT * FROM receta WHERE id_receta = '$receta';") or die ($conexion."Error en la consulta");
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
                  <button type="submit" class="btn_consulta" name="btn_receta">Preparar</button>
                  </form>
                  </div>
                  <?php
                }
              }
              ?>
              </div>
              
              <?php
            }
          }
        }
?>
</center>