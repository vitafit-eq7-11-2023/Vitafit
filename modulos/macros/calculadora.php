<style>
    .btn_generar{
        background-color:#ffffff;
        padding: 10px 20px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .btn_generar:hover{
        transform: scale(1.1);
    }
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
    .titulo{
        padding: 30px 20px;
    }

</style>
<div class="container cuerpo">
<div class="row">
<center>
<div class="col-md-12">
<h3 class="titulo">Cálculos</h3>
<p>Ayuda a controlar su ingesta nutricional y a seguir dietas específicas.</p>
<table class="table">
<thead class="thead">
  
<tr>
<th scope="col">Nombre del alimento</th>
<th scope="col">Proteína</th>
<th scope="col">Grasas</th>
<th scope="col">Carbohidratos</th>
<th scope="col">Calorías</th>
<th scope="col">Fribra</th>
<th scope="col">Cantidad en gramos</th>
</tr>
  </thead>
  <tbody>
    
<?php
      include "conexion.php";
      if (isset($_SESSION['documento'])){
        if(isset($_POST['btn_eliminar'])){
            $id_calculo=$_POST['id_calculo'];
            $elimiar=mysqli_query($conexion, "DELETE FROM `calculadora` WHERE `calculadora`.`id_calculo` = '$id_calculo'");
            echo "Cálculo eliminado con exito";
        }
        $dato=$_SESSION['documento'];
        $consulta=mysqli_query($conexion,"SELECT * FROM calculadora WHERE numero_identificacion LIKE '%$dato%';") or die ($conexion."Error en la consulta");
        $cantidad = mysqli_num_rows($consulta);
        if($cantidad > 0){
            while($fila=mysqli_fetch_array($consulta)){
                $cantidad = $fila['cantidad'];
                $id_alimento = $fila['id_alimento'];
                $id_calculo = $fila['id_calculo'];
                $consulta_alimento=mysqli_query($conexion,"SELECT * FROM macros WHERE id_alimentos LIKE '%$id_alimento%';") or die ($conexion."Error en la consulta");
                if($fila=mysqli_fetch_array($consulta_alimento)){
                    $proteina = $fila['proteina'];
                    $grasas = $fila['grasas'];
                    $carbohidratos = $fila['carbohidratos'];
                    $calorias = $fila['calorias'];
                    $fibra = $fila['fibra'];
                    $nombre = $fila['nombre_alimento'];
                    $proteina1 = $proteina/100;
                    $grasas1 = $grasas/100;
                    $carbohidratos1 = $carbohidratos/100;
                    $calorias1 = $calorias/100;
                    $fibra1 = $fibra/100;
                    $proteina2 = $proteina1*$cantidad;
                    $grasas2 = $grasas1*$cantidad;
                    $carbohidratos2 = $carbohidratos1*$cantidad;
                    $calorias2 = $calorias1*$cantidad;
                    $fibra2 = $fibra1*$cantidad;
                    ?>
        <tr>
          <th><?php echo $nombre; ?></th>
          <td><?php echo $proteina2; ?></td>
          <td><?php echo $grasas2; ?></td>
          <td><?php echo $carbohidratos2; ?></td>
          <td><?php echo $calorias2; ?></td>
          <td><?php echo $fibra2; ?></td>
            <?php
                }
            ?>

          <th><?php echo $cantidad,"g"; ?></th>

          <td>
            <form action="dashboard.php?mod=calculadora" method="POST">
              <input type="text" name="id_calculo" value="<?php echo $id_calculo; ?>" hidden>
              <button type="submit" name="btn_eliminar" style="background-color: transparent; border: 0px;">    
                <img src="img/boton-eliminar.png" alt="eliminar" width="20">
              </button>
              
            </form>
          </td>
        </tr>
        <p></p>
        <?php
        
      }
      }
        ?>
          </tbody>
        </table>
        <br>
        <form action="dashboard.php?mod=menu_alimentos" method="POST">
          <button type="submit" name="btn_generar" class="btn_consulta">Generar cálculo</button>
        </form>
        <br><br>
        <h4>Que es un contador de macros?</h4>
        <p>
Una contadora de macros es una herramienta o aplicación que ayuda a las personas a seguir y calcular la cantidad de carbohidratos, proteínas y grasas en su dieta diaria, lo que es útil para objetivos nutricionales y de salud.</p>
        </center>
        </div>
        </div>
        <?php
    }
?>
