<?php
include "./conexion.php";
session_start();
if (isset($_POST["btn_calculo"])){
    $cantidad = $_POST['cantidad_alimento'];
    $id_alimento = $_POST['id_alimento'];
    $identificacion_usuario = $_SESSION['documento'];
    $registrar = mysqli_query($conexion, "INSERT INTO `calculadora` (`id_calculo`, `id_alimento`, `cantidad`, `numero_identificacion`) VALUES ('', '$id_alimento', '$cantidad', '$identificacion_usuario')") or die($conexion);
    echo "<script>alert('Cálculo exitoso');</script>";
    echo "<script>window.location='dashboard.php?mod=calculadora' ;</script>";
}
?>