<style>

    .container-pre{
        height: 310px;
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
</div>
<br>
<h4>Tu proceso</h4>
<div class="container-pre" onclick="window.location.href='dashboard.php?mod=seguimiento'">
<div class="row ">
<div class="col-md-4 stat1">
	<canvas id="grafica-pastel"></canvas>
</div>
<div class="col-md-4 stat2">
	<canvas id="grafica-barras1"></canvas>
    <canvas id="grafica-barras2"></canvas>
</div>
<div class="col-md-4 stat3">
	<canvas id="grafica-araña"></canvas>
</div>
</div>
</div>
<br>

<h4>Tu plan</h4>
<div class="container-pre">

<div class="row" style="justify-content: space-between;">
<div class="col-md-3 container-info-1">
</div>
    
<div class="col-md-4 container-info-2">
<div>
    <h3>omaga</h3>
</div>
</div>
<div class="col-md-3 container-info-3">
</div>
</div>
</div>
</div>


<script>
const label = ['Enero', 'Febrero', 'Marzo', 'Abril']
const colors = ['rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)'];

const pastel = document.querySelector("#grafica-pastel");
const barras1 = document.querySelector("#grafica-barras1");
const barras2 = document.querySelector("#grafica-barras2");
const araña = document.querySelector("#grafica-araña");

const data_pastel = {
    datasets: [{
        data: [1, 2, 3, 4],
        backgroundColor: colors
    }]
};

const confi_pastel = {
    type: 'pie',
    data: data_pastel,
};

const data_barras1 = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
    datasets:[{
        label: "Peso",
        data: [1, 2, 3, 4],
        backgroundColor: colors
    }]
};
const confi_barras1 = {
    type: 'bar',
    data: data_barras1,
};
const data_barras2 = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
    datasets:[{
        label: "Entrenamientos",
        data: [1, 2, 3, 4],
        backgroundColor: colors
    }]
};
const confi_barras2 = {
    type: 'bar',
    data: data_barras2,
};
const dataset1 = {
    label: "Tus estadísticas.",
    data: [50, 20, 40, 60, 80, 100],
    borderColor: 'rgba(248, 37, 37, 0.8)',
    backgroundColor: 'rgba(255,0,0,0.29)'
};

const dataset2 = {
    label: "Usuario promedio.",
    data: [80, 90, 40, 50, 70, 90],
    borderColor: 'rgba(69,200,248,0.8)',
    backgroundColor: 'rgba(0,255,234,0.31)'
};

const data_araña = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
    datasets: [dataset1,dataset2]
};

const confi_araña = {
    type: 'radar',
    data: data_araña,
};

new Chart(pastel, confi_pastel);
new Chart(barras1, confi_barras1);
new Chart(barras2, confi_barras2);
new Chart(araña, confi_araña);
</script>