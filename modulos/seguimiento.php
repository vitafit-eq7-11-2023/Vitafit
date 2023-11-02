<style>
   
   body {
     background-color: #BFEBC5;
   }
   #chart-container {
     max-width: 600px;
     margin: 0 auto;
   }
   .btn_peso{
        background-color:#ffffff;
        width: 150px;
        height: 40px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .btn_peso:hover{
        transform: scale(1.1);
    }
 </style>

<div class="container md-5 text-center">
  <h1>Seguimiento</h1>
  <br><br>
  <h3>Peso</h3>
</div>

<div class="contenedor_peso">
  <div class="row">
    <div class="grafica_peso col-md-6 text-center">
      <h4>Grafica</h4>
      <div>
        <canvas id="grafica"></canvas>
      </div>
    </div>
    <div class="resumen_peso col-md-6 text-center">
      <h4>Resumen</h4>
      <p class="p-1">"No importa cuán desafiante parezca tu camino, cada día que te esfuerzas por alcanzar tu objetivo es un paso en la dirección correcta. A veces, los desafíos son parte del viaje, y lo más importante es que sigues adelante con determinación. Tu dedicación y persistencia son dignas de admiración. Recuerda que tu salud y bienestar son una prioridad, y estás trabajando para lograr tus metas de manera responsable. ¡Sigue esforzándote y ten en cuenta que tu éxito llegará en su momento! Estamos aquí para apoyarte en este viaje hacia una versión más saludable y feliz de ti mismo/a. ¡Tú puedes hacerlo!" 💪🌟</p>
    </div>
  </div>
  <div class="contenedor_peso_actu text-center">
    <form action="dashboard.php?mod=seguimiento" method="POST">
      <h4 class="center">Actualiza tu peso</h4>
      <br>
      <div class="row" style="justify-content: center;">
        <div class="col-md-2">
          <input type="text" class="form-control" name="txtpeso" placeholder="Nuevo peso" required></input>
        </div>
        <button type="submit" name="btn_peso" class="btn_peso col-md-2">Actualizar</button>
      </div>
    </form>
  </div>
</div>
<div class="contenedor_informacion">
  <br><br>
  <h3 class="text-center">Dias completados con exito</h3>
  <br>
  <div class="row">
    <div class="grafica_peso col-md-6 text-center">
      <h4>Plan alimenticio</h4>
      <h3>
      <?php
        $documento = $_SESSION["documento"];
        $consulta_seguimiento = mysqli_query($conexion,"SELECT * FROM seguimiento WHERE numero_identificacion = '$documento';");
        if($fila=mysqli_fetch_array($consulta_seguimiento)){
          $dias_plan=$fila['dieta_cumplida'];
          echo $dias_plan;
        }
      ?>
      </h3>
    </div>
    <div class="resumen_peso col-md-6 text-center">
      <h4>Rutina de ejercicios</h4>
        <h3>
        <?php
          $documento = $_SESSION["documento"];
          $consulta_seguimiento = mysqli_query($conexion,"SELECT * FROM seguimiento WHERE numero_identificacion = '$documento';");
          if($fila=mysqli_fetch_array($consulta_seguimiento)){
            $dias_rutina=$fila['rutina_realizada'];
            echo $dias_rutina;
          }
        ?>
        </h3>
    </div>
  </div>
</div>
<?php
include "conexion.php";
if(isset($_POST["btn_peso"])){
$documento = $_SESSION["documento"];
$peso = $_POST["txtpeso"];
$actualizacion=mysqli_query($conexion, "UPDATE `usuario` SET `peso` = '$peso' WHERE `numero_identificacion` = $documento;");
$_SESSION['peso']= $peso;
}
?>
 <script src="script.js"></script>
 <script>
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = [""]
// Podemos tener varios conjuntos de datos
const datosVentas2020 = {
    label: "Peso inicial",
    data: [<?php 
    $documento = $_SESSION['documento'];
    $consulta_seguimiento = mysqli_query($conexion,"SELECT * FROM seguimiento WHERE numero_identificacion LIKE '%$documento%';");
    while($fila=mysqli_fetch_array($consulta_seguimiento)){
      $peso_inicial = $fila['peso_inicial'];
      echo $peso_inicial;
    }
    ?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const datosVentas2021 = {
    label: "Peso actual",
    data: [<?php echo $_SESSION['peso']; ?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};

new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            datosVentas2021,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
 </script>