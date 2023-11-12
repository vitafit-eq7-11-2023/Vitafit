<?php
include "conexion.php";
session_start();
if (isset($_POST["btn_objetivo"])){
    $identificacion_usuario = $_SESSION['documento'];
    $consulta=mysqli_query($conexion,"SELECT * FROM plan_alimenticio WHERE numero_identificacion LIKE '%$identificacion_usuario%';") or die ($conexion."Error en la consulta");
    $cantidad = mysqli_num_rows($consulta);
    if($cantidad > 0){
        if($fila=mysqli_fetch_array($consulta)){
            $id_plan=$fila['id_plan'];
            $dato="";
            $consulta_recetas = mysqli_query($conexion,"SELECT * FROM receta WHERE id_receta LIKE '%$dato%';") or die ($conexion."Error en la consulta");
            $cantidad_recetas = mysqli_num_rows($consulta_recetas);
            $dias=1;
            while($dias<=7){
                $i=1;
                while($i<=3){
                    $id_receta = rand(1,$cantidad_recetas);
                    $registrar = mysqli_query($conexion, "INSERT INTO `lista_plan` (`id_plan`, `id_receta`, `dia_consumo`, `completada`) VALUES ('$id_plan', '$id_receta', '$dias', '1')") or die($conexion);
                    $i=$i+1;
                }
                $dias=$dias+1;
            }
            echo "<script>alert('Plan alimenticio generado');</script>";
            echo "<script>window.location='dashboard.php?mod=palimenticio_pro' ;</script>";
        }
    }
}
?>