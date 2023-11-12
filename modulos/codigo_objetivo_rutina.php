<?php
include "conexion.php";
session_start();
if (isset($_POST["btn_objetivo"])){
    $identificacion_usuario = $_SESSION['documento'];
    $consulta=mysqli_query($conexion,"SELECT * FROM rutina WHERE numero_identificacion = '$identificacion_usuario';") or die ($conexion."Error en la consulta");
    $cantidad = mysqli_num_rows($consulta);
    if($cantidad > 0){
        if($fila=mysqli_fetch_array($consulta)){
            $id_rutina=$fila['id_rutina'];
            $dato="";
            $consulta_ejercicios = mysqli_query($conexion,"SELECT * FROM ejercicio WHERE id_ejercicio LIKE '%$dato%';") or die ($conexion."Error en la consulta");
            $cantidad_ejercicios = mysqli_num_rows($consulta_ejercicios);
            $dias=1;
            while($dias<=7){
                $i=1;
                while($i<=6){
                    $id_ejercicio = rand(1,$cantidad_ejercicios);
                    $registrar = mysqli_query($conexion, "INSERT INTO `lista_rutina` (`id_rutina`, `id_ejercicio`, `dia_cumplimiento`, `completada`) VALUES ('$id_rutina', '$id_ejercicio', '$dias', '1')") or die($conexion);
                    $i=$i+1;
                }
                $dias=$dias+1;
            }
            echo "<script>alert('Rutina generada');</script>";
            echo "<script>window.location='dashboard.php?mod=rutina_pro' ;</script>";
        }
    }
}
?>