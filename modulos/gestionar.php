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
</forms>
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
          $elimiar=mysqli_query($conexion, "DELETE FROM `usuario` WHERE `usuario`.`numero_identificacion` = '$documento'");
          echo "usuario eliminado con exito";
        }
        if(isset($_POST['btn_editar'])){
          echo "<script>window.location='dashboard.php?mod=gestionar#formulario';</script>";
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
          <input type="text" name="correo" value="<?php echo $fila['correo'];?> "hidden>
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
?>
                  <div class="col-md-12" id="formulario">
                    <h3>Modificar usuario</h3>
                  </div>
                  <form action="codigo_agregar.php" method="post">
                    <img src="img/vitafit_logo.png" alt="vitafit_logo" width="300">
                      <br><br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ingrese correo</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
                            <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie</small>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingrese nombres</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer nombre" name="name1">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo nombre" name="name2">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">ingrese apellidos</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer apellido" name="ape1">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo apellido" name="ape2">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese su celular</label>
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="celular" name="tel">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Tipo de documento</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="t_doc">
                            <option>Seleccione</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="CC">Cedula cuidadana</option>
                            <option value="RC">Registro civil</option>
                            <option value="CE">cedula de estranjeria</option>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese numero de documento</label>
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="Documento" name="doc">
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Datos personales</label>
                            <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                            <option>Sexo</option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                            </select>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Edad" name="edad">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Peso en kg" name="peso">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Altura en cm" name="altura">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese la contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="contra">
                        </div>
                        <br>
                        <button type="submit" class="btn_registrar" name="btn_registrar">Cambiar</button>
                        <br><br>
                    </form>
    <?php
      }
    ?>
</div>
</center>
</div>
</div>