<style>

    .container-pre{
        background-color: #ffffff;
        border-radius: 15px;
    }
    .container-info-1{
        height: 290px;
        background-color: #BFEBC5;
        border-radius: 15px;
        margin-left: 20px;
        margin-top: 10px;
    }
    .container-info-2{
        height: 290px;
        background-color: #BFEBC5;
        border-radius: 15px;

        margin-top: 10px;
    }
    .container-info-3{
        height: 290px;
        background-color: #BFEBC5;
        border-radius: 15px;
        margin-right: 20px;
        margin-top: 10px;
    }
    .container-seguimiento:hover{
        cursor: pointer;
    }
</style>

<div class="container-main">
<div class="container-saludo">
<h1>Bienvenido a Vitafit</h1>
<?php
$hora=date("H");

if ($hora>=12 and $hora<=18)
    {
?>
<h3>Buenos días <?php echo $_SESSION['primer_nombre']; ?></h3>
<?php
    }
    else
        if($hora>=19 and $hora<=24)
        {
?>
<h3>Buenas tardes <?php echo $_SESSION['primer_nombre']; ?></h3>
<?php
        }
        else
            if($hora>=1 and $hora<=11)
        {
?>
<h3>Buenas noches <?php echo $_SESSION['primer_nombre']; ?></h3>
<?php
        }
?>
<p>¡Bienvenido a nuestra aplicación de rutinas de ejercicio y plan alimenticio! Estamos emocionados de tenerte a bordo en tu viaje hacia un estilo de vida más saludable y activo. Aquí encontrarás todo lo que necesitas para alcanzar tus metas de bienestar.</p>
</div>
<br>
<h4>Tu proceso</h4>

<div class="container-pre" onclick="window.location.href='dashboard.php?mod=seguimiento'">
<div class="row ">
<div class="col-md-6">
	<canvas id="grafica" style="margin:10px;"></canvas>
</div>
<div class="col-md-6">
  <p class="p-1" style="margin:10px;">No importa cuán desafiante parezca tu camino, cada día que te esfuerzas por alcanzar tu objetivo es un paso en la dirección correcta. A veces, los desafíos son parte del viaje, y lo más importante es que sigues adelante con determinación. Tu dedicación y persistencia son dignas de admiración. Recuerda que tu salud y bienestar son una prioridad, y estás trabajando para lograr tus metas de manera responsable. ¡Sigue esforzándote y ten en cuenta que tu éxito llegará en su momento! Estamos aquí para apoyarte en este viaje hacia una versión más saludable y feliz de ti mismo/a. ¡Tú puedes hacerlo! 💪🌟</p>
</div>
</div>
</div>
<br>

<h4>Tu plan</h4>
<div class="container-pre">

<div class="row" style="justify-content: space-between;">
<div class="col-md-3 container-info-1">
    <div>
        <h3>Rutinas</h3>
    </div>
</div>
    
<div class="col-md-3 container-info-2">
<div>
    <h3>Calendario</h3>
</div>
</div>
<div class="col-md-3 container-info-3">
    <div>
        <h3>Plan alimenticio</h3>
    </div>
</div>
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