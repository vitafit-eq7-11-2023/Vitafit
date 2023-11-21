
<div style="
      background-color:white ;
      border-radius: 10px;
    ">
<?php
include "conexion.php";
if (isset($_POST["btn_ejercicio"])){
    $dato=$_POST["id_ejercicio"];
    $consulta=mysqli_query($conexion,"SELECT * FROM ejercicio WHERE id_ejercicio = '$dato';") or die ($conexion."Error en la consulta");
    $cantidad = mysqli_num_rows($consulta);
    if($cantidad > 0){
    while($fila=mysqli_fetch_array($consulta)){
      ?>
        <div>
          <a href="dashboard.php?mod=rutina_pro">
           <box-icon type="regular" name="chevron-left" color="black" size="70px"></box-icon>
          </a>
        </div>
        <center>
        <h2><?php echo $fila['nombre'];?></h2>
        <br>
        <h4>Instrucciones</h4>
        <p><?php echo $fila['descripcion'];?></p>
        <br>
        <h4>Video</h4>
        <video style="border-radius:20px;"  autoplay loop>
          <source src="img_ejercicio/<?php echo $fila['video']; ?>" type="video/mp4">
        </video>
        <br>
        <br>
        <p>Nuestros ejercicios estan aprovados por un entrenador personal, si deseas saber mas de el puedes visitarlo aqui:<a href="https://instagram.com/j_camiloz" class="nav-link text-muted" target="_blank"><box-icon type="logo" name="instagram" color="black"></box-icon></a></p>
        </center>
      <?php
    }
    }
}
?>
</div>