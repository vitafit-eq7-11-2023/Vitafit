<?php
include "conexion.php";
if (isset($_POST["btn_registrar"])){
    $correo = $_POST['correo'];
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $ape1 = $_POST['ape1'];
    $ape2 = $_POST['ape2'];
    $tel = $_POST['tel'];
    $tipo_doc = $_POST['t_doc'];
    $doc = $_POST['doc'];
    $sex = $_POST['sexo'];
    $age = $_POST['edad'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $tipo_rol = $_POST['t_rol'];
    $contra = $_POST['contra'];
    $contra_con = $_POST['contra_confirm'];
    $encrip = md5($contra);
    $consulta_numero = mysqli_query($conexion,"SELECT * FROM usuario WHERE numero_identificacion = '$doc';") or die ($conexion."Error en la consulta");
    $cantidad_numero = mysqli_num_rows($consulta_numero);
    $consulta_correo = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$correo';") or die ($conexion."Error en la consulta");
    $cantidad_correo = mysqli_num_rows($consulta_correo);
    if($contra!=$contra_con){
        ?>
        <br>
        <h4>
        <?php
        echo "<script>alert('Las contraseñas no coinciden');</script>";
        echo "<script>window.location='registrar.php' ;</script>";
        ?>
        </h4>
        <?php
      }else
          if($altura > 270 OR $peso > 271 OR $age > 110){
            ?>
            <br>
            <h4>
            <?php
            echo "<script>alert('Proporciona datos reales para continuar con el registro');</script>";
            echo "<script>window.location='registrar.php' ;</script>";
            ?>
            </h4>
            <?php
          }else
              if($cantidad_numero>0){
                echo "<script>alert('El numero de indetificacion que proporcionas ya esta en uso');</script>";
                echo "<script>window.location='registrar.php' ;</script>";
              }else
                  if($cantidad_correo>0){
                    echo "<script>alert('El correo que proporcionas ya esta en uso');</script>";
                    echo "<script>window.location='registrar.php' ;</script>";
                  }else{
            $registrar = mysqli_query($conexion, "INSERT INTO `usuario` (`correo`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `celular`, `tipo_documento`, `numero_identificacion`, `edad`, `estatura`, `peso`, `sexo`, `contraseña`, `id_rol`) VALUES ('$correo', '$name1', '$name2', '$ape1', '$ape2', '$tel', '$tipo_doc', '$doc', '$age', '$altura', '$peso', '$sex', '$encrip', '$tipo_rol')") or die($conexion);
            $registrar_seguimiento = mysqli_query($conexion,"INSERT INTO `seguimiento` (`peso_inicial`, `rutina_realizada`, `dieta_cumplida`, `numero_identificacion`) VALUES ('$peso', '0', '0', '$doc')") or die($conexion);
            $registrar_plan = mysqli_query($conexion,"INSERT INTO `plan_alimenticio` (`id_plan`, `numero_identificacion`) VALUES ('', '$doc')") or die($conexion);
            $registrar_rutina = mysqli_query($conexion,"INSERT INTO `rutina` (`id_rutina`, `numero_identificacion`) VALUES ('', '$doc')") or die($conexion);
            echo "<script>alert('Registro exitoso');</script>";
            echo "<script>window.location='index.php' ;</script>";
          }
}
?>