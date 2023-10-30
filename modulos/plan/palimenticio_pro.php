<style>
    .receta{
      background-color:#BFEBC5 ;
      height: 200px;
      margin: 4%;
      border-radius: 10px;
    }
</style>
<center>
<h1>Tu plan alimenticio</h1>
<?php
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
                  <button type="submit" class="btn_consulta col-md-2" name="btn_receta"></button>
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
?>
</center>