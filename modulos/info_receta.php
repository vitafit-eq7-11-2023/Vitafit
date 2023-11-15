
<div style="
      background-color:white ;
      border-radius: 10px;
    ">
<?php
include "conexion.php";
if (isset($_POST["btn_receta"])){
    $dato=$_POST["nombre_receta"];
    $consulta=mysqli_query($conexion,"SELECT * FROM receta WHERE nombre = '$dato';") or die ($conexion."Error en la consulta");
    $cantidad = mysqli_num_rows($consulta);
    if($cantidad > 0){
    while($fila=mysqli_fetch_array($consulta)){
      ?>
        <div>
          <a href="dashboard.php?mod=recetas">
           <box-icon type="regular" name="chevron-left" color="black" size="70px"></box-icon>
           </a>
        </div>
        <center>
        <h2><?php echo $fila['nombre'];?></h2>
        <br>
        <h4>Ingredientes</h4>
        <p><?php echo $fila['ingredientes'];?></p>
        <h4>Paso a paso</h4>
        <p><?php echo $fila['descripcion'];?></p>
        </center>
      <?php
    }
    }
}
?>
</div>