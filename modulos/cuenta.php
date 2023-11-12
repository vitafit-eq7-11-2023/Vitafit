<style>
    .contenedor1 {
    background-color:white ;
    border-radius: 3%;
    width: 85%;
    height: 100% ;
    font-family: 'Comfortaa';
    font-size: 16px;
 }
.boton1 {
     width: 250px;
     padding: 10px 20px;
     background-color: #BFEBC5;
     color: black;
     border: none;
     border-radius: 5px;
     font-size: 16px;
     cursor: pointer;
     transition: transform 0.3s ease;
     margin:7px;
 }
.boton1:hover{
    transform: scale(1.1);
}
.btn_eliminar{
     width: 250px;
     padding: 10px 20px;
     background-color: #BFEBC5;
     color: black;
     border: none;
     border-radius: 5px;
     font-size: 16px;
     cursor: pointer;
     transition: transform 0.3s ease;
     margin: 7px;
    }
    .btn_eliminar:hover{
        transform: scale(1.1);
        background-color: red;
        color: white;
    }
input:disabled{
    background-color: #f2fbf3 !important;
}
select:disabled{
    background-color: #f2fbf3 !important;
}
</style>
<div class="row">
                <center> 
                <div class="contenedor1">
                    <center>
                            <div class="col-md-8 border-right">
                            <div class="py-3">
                                <div class="mb-3">
                                <h2>Información de usuario</h2>
                                </div>
                                <?php
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
                                        $actualizacion=mysqli_query($conexion,"UPDATE `usuario` SET `correo` = '$correo', `primer_nombre` = '$primer_nombre', `segundo_nombre` = '$segundo_nombre', `primer_apellido` = '$primer_apellido', `segundo_apellido` = '$segundo_apellido', `edad` = '$edad', `estatura` = '$estatura', `peso` = '$peso', `sexo` = '$sexo' WHERE `usuario`.`numero_identificacion` = '$doc_change';");
                                        $_SESSION['primer_nombre'] = $primer_nombre;
                                        $_SESSION['segundo_nombre'] = $segundo_nombre;
                                        $_SESSION['primer_apellido'] = $primer_apellido;
                                        $_SESSION['segundo_apellido'] = $segundo_apellido;
                                        $_SESSION['celular'] = $celular;
                                        $_SESSION['documento'] = $doc_change;
                                        $_SESSION['sexo'] = $sexo;
                                        $_SESSION['estatura'] = $estatura;
                                        $_SESSION['peso'] = $peso;
                                        $_SESSION['edad'] = $edad;
                                        $_SESSION['correo'] = $correo;
                                        echo "<script>alert('Usuario actualizado');</script>";
                                        echo "<script>window.location='dashboard.php?mod=cuenta' ;</script>";
                                    }
                                    $documento=$_SESSION['documento'];
                                    $consulta = mysqli_query($conexion,"SELECT * FROM usuario WHERE numero_identificacion = '$documento';") or die ($conexion."Error en la consulta");
                                    if($fila=mysqli_fetch_array($consulta)){
                                ?>
                                <form action="dashboard.php?mod=cuenta" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Documento</label>
                                        <input type="text" class="form-control" name="doc_principal"  value="<?php echo $documento;?>" disabled>
                                        <input type="text" class="form-control" name="doc_principal"  value="<?php echo $documento;?>" hidden>
                                        <small id="emailHelp" class="form-text text-muted">Este campo no se puede editar</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Correo</label>
                                        <input type="email" class="form-control" aria-describedby="emailHelp" id="exampleFormControlInput1" placeholder="name@example.com" name="correo"  value="<?php echo $fila['correo'];?>"required>
                                    </div>
                                    <div class="row">
                                        <label for="exampleInputEmail1">Nombres</label>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="primer nombre" name="name1" value="<?php echo $fila['primer_nombre'];?>"required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="segundo nombre" name="name2" value="<?php echo $fila['segundo_nombre'];?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <label for="exampleInputEmail1">Apellidos</label>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="primer apellido" name="ape1" value="<?php echo $fila['primer_apellido'];?>" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="segundo apellido" name="ape2" value="<?php echo $fila['segundo_apellido'];?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Celular</label>
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
                                    <br>
                                    <button type="submit" class="boton1" name="btn_actualizar">Cambiar informacion</button>
                                </form>
                                <?php
                                    $admin= $_SESSION['rol'];
                                    if($admin==2){
                                ?>
                                    <a class="nav-link" href="dashboard.php?mod=usuarios">
                                     <button type="submit"class="boton1">Gestionar usuarios</button>
                                    </a>
                                <?php
                                    }
                                ?>
                                <a href="salir.php">
                                 <button type="submit" class="btn_eliminar">Cerrar sesion</button>
                                </a>
                                <?php
                                    }
                                ?>
                            </div>
           
                            </center>
                        </div>
                           
                           
                       
                       
                    </div>
               
               
               
           
        </div>
        </div>
