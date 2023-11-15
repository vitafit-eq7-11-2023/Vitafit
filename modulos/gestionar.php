<style>
    .table{
        font-size: 12px;
    }
    .thead{
        background-color:#BFEBC5;
    }
    .btn_consulta{
        background-color:#BFEBC5;
        padding: 10px 20px;
        margin: 10px;
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
    .cuerpo{
        background-color:white;
        position: relative;
    }
</style>
<div class="container cuerpo">
<div class="row">
<center>
<div class="col-md-12">
<form method="post"action="dashboard.php?mod=gestionar">
<div class="form-group">
    <br>
<h3>Gestionar</h3>
<input type="text" class="form-control" name="txtconsulta" placeholder="Nombre">
<small id="text" class="form-text text-muted"></small>
</div>
<button type="submit" class="btn_consulta" name="btn_consulta">Consultar</button>
<br><br>
</form>
<table class="table">
<thead class="thead">
<tr>
<th scope="col">Documento</th>
<th scope="col">Tipo de docuemnto</th>
      <th scope="col">Primer nombre</th>
      <th scope="col">Primer apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include "conexion.php";
      if (isset($_SESSION['documento'])){
        if(isset($_POST['btn_eliminar'])){

          $documento=$_POST['documento'];
          $consulta = mysqli_query($conexion,"SELECT * FROM plan_alimenticio WHERE numero_identificacion = '$documento';") or die ($conexion."Error en la consulta");
          if($fila=mysqli_fetch_array($consulta)){
            $numero_plan=$fila['id_plan'];
            $elimiar_lista=mysqli_query($conexion, "DELETE FROM `lista_plan` WHERE `lista_plan`.`id_plan` = '$numero_plan'");
          }
          $consulta = mysqli_query($conexion,"SELECT * FROM rutina WHERE numero_identificacion = '$documento';") or die ($conexion."Error en la consulta");
          if($fila=mysqli_fetch_array($consulta)){
            $numero_rutina=$fila['id_rutina'];
            $elimiar_lista=mysqli_query($conexion, "DELETE FROM `lista_rutina` WHERE `lista_rutina`.`id_rutina` = '$numero_plan'");
          }
          $elimiar_plan=mysqli_query($conexion, "DELETE FROM `plan_alimenticio` WHERE `plan_alimenticio`.`numero_identificacion` = '$documento'");
          $elimiar_rutinas=mysqli_query($conexion, "DELETE FROM `rutina` WHERE `rutina`.`numero_identificacion` = '$documento'");
          $elimiar_seguimineto=mysqli_query($conexion, "DELETE FROM `seguimiento` WHERE `seguimiento`.`numero_identificacion` = '$documento'");
          $elimiar_calculos=mysqli_query($conexion, "DELETE FROM `calculadora` WHERE `calculadora`.`numero_identificacion` = '$documento'");
          $elimiar_usuario=mysqli_query($conexion, "DELETE FROM `usuario` WHERE `usuario`.`numero_identificacion` = '$documento'");
          echo "usuario eliminado con exito";
          
        }
        if(isset($_POST['btn_editar'])){
          echo "<script>window.location='dashboard.php?mod=gestionar#formulario';</script>";
        }
        if(isset($_POST['btn_actualizar'])){
          $doc_change=$_POST['doc_principal'];
          $correo=$_POST['correo'];
          $primer_nombre=$_POST['name1'];
          $segundo_nombre=$_POST['name2'];
          $primer_apellido=$_POST['ape1'];
          $segundo_apellido=$_POST['ape2'];
          $celular=$_POST['tel'];
          $edad=$_POST['edad'];
          $estatura=$_POST['altura'];
          $peso=$_POST['peso'];
          $sexo=$_POST['sexo'];
          $rol=$_POST['rol'];
          $actualizacion=mysqli_query($conexion,"UPDATE `usuario` SET `correo` = '$correo', `primer_nombre` = '$primer_nombre', `segundo_nombre` = '$segundo_nombre', `primer_apellido` = '$primer_apellido', `segundo_apellido` = '$segundo_apellido', `edad` = '$edad', `estatura` = '$estatura', `peso` = '$peso', `sexo` = '$sexo', `id_rol` = '$rol' WHERE `usuario`.`numero_identificacion` = '$doc_change';");
          echo "usuario actualizado con exito";
        }
      
      if(isset($_POST['btn_consulta'])){  
      $dato=$_POST["txtconsulta"];
      $consulta=mysqli_query($conexion,"SELECT * FROM usuario WHERE primer_nombre LIKE '%$dato%';") or die ($conexion."Error en la consulta");
      $cantidad = mysqli_num_rows($consulta);
      if($cantidad > 0){
      while($fila=mysqli_fetch_array($consulta)){
    ?>
    <tr>
      <th><?php echo $fila['numero_identificacion']; ?></th>
      <td><?php echo $fila['tipo_documento']; ?></td>
      <td><?php echo $fila['primer_nombre']; ?></td>
      <td><?php echo $fila['primer_apellido']; ?></td>
      <td><?php echo $fila['correo']; ?></td>
      <td><?php echo $fila['celular']; ?></td>
      <td>
        <form action="dashboard.php?mod=gestionar" method="POST">
          <input type="text" name="documento" value="<?php echo $fila['numero_identificacion'];?> "hidden>
          <button type="submit" name="btn_eliminar" style="background-color: transparent; border: 0px;">    
            <img src="img/boton-eliminar.png" alt="eliminar" width="20">
          </button>
        </form>
      </td>
      <td>
        <form action="dashboard.php?mod=gestionar" method="POST">
          <input type="text" name="documento" value="<?php echo $fila['numero_identificacion'];?> "hidden>
          <button type="submit" name="btn_editar" style="background-color: transparent; border: 0px;">    
            <img src="img/boton-editar.png" alt="eliminar" width="20">
          </button>
        </form>
      </td>

    </tr>
    <?php
      }
      }
      }
      }
    ?>
  </tbody>
</table>
<?php
if(isset($_POST['btn_editar'])){
  $documento=$_POST['documento'];
  $consulta = mysqli_query($conexion,"SELECT * FROM usuario WHERE numero_identificacion = '$documento';") or die ($conexion."Error en la consulta");
  if($fila=mysqli_fetch_array($consulta)){
?>
                    <div class="col-md-12" id="formulario">
                    <h3>Modificar usuario</h3>
                    </div>
                    <form action="dashboard.php?mod=gestionar" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="doc_principal"  value="<?php echo $documento;?>" hidden>
                        </div>
                    <img src="img/vitafit_logo.png" alt="vitafit_logo" width="300">
                      <br><br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ingrese correo</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="exampleFormControlInput1" placeholder="name@example.com" name="correo"  value="<?php echo $fila['correo'];?>"required>
                        </div>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingrese nombres</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer nombre" name="name1" value="<?php echo $fila['primer_nombre'];?>"required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo nombre" name="name2" value="<?php echo $fila['segundo_nombre'];?>">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">ingrese apellidos</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer apellido" name="ape1" value="<?php echo $fila['primer_apellido'];?>" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo apellido" name="ape2" value="<?php echo $fila['segundo_apellido'];?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese su celular</label>
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="celular" name="tel" value="<?php echo $fila['celular'];?>">
                        </div>
                        <div class="row">
                            <label for="exampleInputEmail1">Datos personales</label>
                            <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" name="sexo" required>
                              <option  value="<?php if($fila['sexo']=="M"){echo"M";}else{echo"F";}?>"><?php if($fila['sexo']=="M"){echo"Masculino";}else{echo"Femenino";}?></option>
                              <option value="<?php if($fila['sexo']=="F"){echo"M";}else{echo"F";}?>"><?php if($fila['sexo']=="F"){echo"Masculino";}else{echo"Femenino";}?></option>
                            </select>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Edad" name="edad" value="<?php echo $fila['edad'];?>" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Peso en kg" name="peso" value="<?php echo $fila['peso'];?>"required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Altura en cm" name="altura" value="<?php echo $fila['estatura'];?>" required>
                            </div>
                        </div>
                        <div class="col">
                          <label for="exampleInputEmail1">Rol</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="rol" required>
                            <option  value="<?php if($fila['id_rol']=="1"){echo"1";}else{echo"2";}?>"><?php if($fila['id_rol']=="1"){echo"Usuario";}else{echo"Administrador";}?></option>
                            <option value="<?php if($fila['id_rol']=="2"){echo"1";}else{echo"2";}?>"><?php if($fila['id_rol']=="2"){echo"usuario";}else{echo"Administrador";}?></option>
                          </select>
                        </div>
                        <br>
                        <button type="submit" class="btn_consulta" name="btn_actualizar">Actualizar</button>
                    </form>
    <?php
      }
    }
    ?>
</div>
</center>
</div>
</div>