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
    $encrip = md5($contra);
    $registrar = mysqli_query($conexion, "INSERT INTO `usuario` (`correo`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `celular`, `tipo_documento`, `numero_identificacion`, `edad`, `estatura`, `peso`, `sexo`, `contraseña`, `id_rol`) VALUES ('$correo', '$name1', '$name2', '$ape1', '$ape2', '$tel', '$tipo_doc', '$doc', '$age', '$altura', '$peso', '$sex', '$encrip', '$tipo_rol')") or die($conexion);
    $registrar_seguimiento = mysqli_query($conexion,"INSERT INTO `seguimiento` (`peso_inicial`, `rutina_realizada`, `dieta_cumplida`, `numero_identificacin`) VALUES ('$peso', '0', '0', '$doc')");
    echo "<script>alert('Registro exitoso');</script>";
    echo "<script>window.location='index.php' ;</script>";
}
?>