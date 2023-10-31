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
    .btn_cambios{
      background-color:#fff;
        width: 200px;
        height: 50px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin:7px;
        transition: transform 0.3s ease;
    }
    .btn_cambios:hover{
        transform: scale(1.1);
    }
    .btn_eliminar{
      background-color:white;
        width: 200px;
        height: 50px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin:7px;
        transition: transform 0.3s ease;
    }
    .btn_eliminar:hover{
        transform: scale(1.1);
        background-color: red;
        color: white;
    }
    .form_dias{
      margin: 24.5px;
    }
</style>
<center>
<h1>Tu rutina de ejercicios</h1>
<p>Recuerda consultar con un especialista los datos que te suministramos </p>
<div class="row">
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="1" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 1</button>
  </form>
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="2" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 2</button>
  </form>  
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="3" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 3</button>
  </form>
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="4" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 4</button>
  </form>
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="5" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 5</button>
  </form>
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="6" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 6</button>
  </form>
  <form action="dashboard.php?mod=rutina_pro" method="POST" class="col-md-1 form_dias">
    <input type="text" name="dia" value="7" hidden>
    <button type="submit" class="btn_dias" name="btn_dias">Ver dia 7</button>
  </form>
</div>
<br>
<?php
      if(isset($_POST['btn_eliminar'])){
        $id_rutina=$_POST['id_rutina'];
        $elimiar_lista=mysqli_query($conexion, "DELETE FROM `lista_rutina` WHERE `lista_rutina`.`id_rutina` = '$id_rutina'");
        echo "<script>alert('Rutina eliminada');</script>";
        echo "<script>window.location='dashboard.php?mod=rutinas' ;</script>";
      }  
      if(isset($_POST['btn_reiniciar'])){
        $id_rutina=$_POST['id_rutina'];
        $actualizacion=mysqli_query($conexion,"UPDATE `lista_rutina` SET `completada` = '1' WHERE id_rutina = '$id_rutina';");
        
      }  
      if(isset($_POST['btn_completado'])){
        $id_rutina=$_POST['id_rutina'];
        $dia=$_POST['dia'];
        $actualizacion=mysqli_query($conexion,"UPDATE `lista_rutina` SET `completada` = '2' WHERE id_rutina = '$id_rutina' AND dia_cumplimiento = '$dia';");
      }    
      if(isset($_POST["btn_dias"])){
        $dia=$_POST['dia'];
        $documento=$_SESSION['documento'];
        $consulta = mysqli_query($conexion,"SELECT * FROM rutina WHERE numero_identificacion LIKE '%$documento%';") or die ($conexion."Error en la consulta");
        if($fila=mysqli_fetch_array($consulta)){
          $numero_rutina=$fila['id_rutina'];
          $consulta_lista = mysqli_query($conexion,"SELECT * FROM lista_rutina WHERE id_rutina = '$numero_rutina' AND dia_cumplimiento = '$dia';") or die ($conexion."Error en la consulta");
          $cantidad = mysqli_num_rows($consulta_lista);
          if($cantidad > 0){
            ?>
            <h3><?php echo "Dia ",$dia;?></h3>
            <div class="row">
            <?php
            while($fila=mysqli_fetch_array($consulta_lista)){
                $ejercicio=$fila['id_ejercicio'];
                $cumplida=$fila['completada'];
                $consulta=mysqli_query($conexion,"SELECT * FROM ejercicio WHERE id_ejercicio = '$ejercicio';") or die ($conexion."Error en la consulta");
                while($fila=mysqli_fetch_array($consulta)){
                    ?>
                    <br>
                    <br><br>
                    <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
                    <div class="nombre_receta">
                      <h6><?php echo $fila['nombre'];?></h6>
                    </div>
                    <?php
                      if($cumplida==2){
                        ?>
                      <div>
                      <p>Realizada</p>
                      </div>
                        <?php
                      }else{
                        ?>
                        <form method="post"action="dashboard.php?mod=info_ejercicio">
                        <input type="text" class="form-control" name="id_ejercicio" value="<?php echo $fila['id_ejercicio'];?>" hidden>
                        <button type="submit" class="btn_consulta" name="btn_ejercicio">Vamos</button>
                        </form>
                        <?php
                      }
                      ?>
                  </div>
                  <?php
                }
              }
              ?>
              </div>
              <form action="dashboard.php?mod=rutina_pro" method="POST">
                <input type="text" name="dia" value="<?php echo $dia; ?>" hidden>
                <input type="text" name="id_rutina" value="<?php echo $numero_rutina; ?>" hidden>
                <button type="submit" name="btn_completado" class="btn_cambios">Completado</button>
              </form>
              <form action="dashboard.php?mod=rutina_pro" method="POST">
                <input type="text" name="id_rutina" value="<?php echo $numero_rutina; ?>" hidden>
                <button type="submit" name="btn_reiniciar" class="btn_cambios">Reiniciar rutina</button>
              </form>
              <form action="dashboard.php?mod=rutina_pro" method="POST">
                <input type="text" name="id_rutina" value="<?php echo $numero_rutina; ?>" hidden>
                <button type="submit" name="btn_eliminar" class="btn_eliminar">Eliminar rutina</button>
              </form>
              <?php
            }
          }
        }else{
          $documento=$_SESSION['documento'];
        $consulta = mysqli_query($conexion,"SELECT * FROM rutina WHERE numero_identificacion LIKE '%$documento%';") or die ($conexion."Error en la consulta");
        if($fila=mysqli_fetch_array($consulta)){
          $numero_rutina=$fila['id_rutina'];
          $dia="1";
          $consulta_lista = mysqli_query($conexion,"SELECT * FROM lista_rutina WHERE id_rutina = '$numero_rutina' AND dia_cumplimiento = '1';") or die ($conexion."Error en la consulta");
          $cantidad = mysqli_num_rows($consulta_lista);
          if($cantidad > 0){
            ?>
            <h3><?php echo "Dia 1";?></h3>
            <div class="row">
            <?php
            while($fila=mysqli_fetch_array($consulta_lista)){
                $ejercicio=$fila['id_ejercicio'];
                $cumplida=$fila['completada'];
                $consulta=mysqli_query($conexion,"SELECT * FROM ejercicio WHERE id_ejercicio = '$ejercicio';") or die ($conexion."Error en la consulta");
                while($fila=mysqli_fetch_array($consulta)){
                  ?>
                  <br>
                  <br><br>
                  <div class="receta col-md-3 col-lg-3 col-sm-3 col-xs-3 shadow-md">
                  <div class="nombre_receta">
                    <h6><?php echo $fila['nombre'];?></h6>
                  </div>
                  <?php
                    if($cumplida==2){
                      ?>
                    <div>
                    <p>Realizada</p>
                    </div>
                      <?php
                    }else{
                      ?>
                      <form method="post"action="dashboard.php?mod=info_ejercicio">
                      <input type="text" class="form-control" name="id_ejercicio" value="<?php echo $fila['id_ejercicio'];?>" hidden>
                      <button type="submit" class="btn_consulta" name="btn_ejercicio">Vamos</button>
                      </form>
                      <?php
                    }
                    ?>
                  </div>
                  <?php
                }
              }
              ?>
              </div>
              <form action="dashboard.php?mod=rutina_pro" method="POST">
                <input type="text" name="dia" value="<?php echo $dia; ?>" hidden>
                <input type="text" name="id_rutina" value="<?php echo $numero_rutina; ?>" hidden>
                <button type="submit" name="btn_completado" class="btn_cambios">Completado</button>
              </form>
              <form action="dashboard.php?mod=rutina_pro" method="POST">
                <input type="text" name="id_rutina" value="<?php echo $numero_rutina; ?>" hidden>
                <button type="submit" name="btn_reiniciar" class="btn_cambios">Reiniciar rutina</button>
              </form>
              <form action="dashboard.php?mod=rutina_pro" method="POST">
                <input type="text" name="id_rutina" value="<?php echo $numero_rutina; ?>" hidden>
                <button type="submit" name="btn_eliminar" class="btn_eliminar">Eliminar rutina</button>
              </form>
              <?php
            }
          }
        }
?>
</center>