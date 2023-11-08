<center>
<?php
// Obtener el mes y año actual
$mes_actual = date("n");
$año_actual = date("Y");

// Días de la semana
$dias_semana = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

// Nombres de los meses
$nombres_meses = array(
    1 => "Enero",
    2 => "Febrero",
    3 => "Marzo",
    4 => "Abril",
    5 => "Mayo",
    6 => "Junio",
    7 => "Julio",
    8 => "Agosto",
    9 => "Septiembre",
    10 => "Octubre",
    11 => "Noviembre",
    12 => "Diciembre"
);

// Número de días en el mes actual
$num_dias_mes = date("t", mktime(0, 0, 0, $mes_actual, 1, $año_actual));

// Obtener el primer día de la semana del mes
$primer_dia_semana = date("w", mktime(0, 0, 0, $mes_actual, 1, $año_actual));

// Crear la tabla del calendario
echo "<h2>{$nombres_meses[$mes_actual]} $año_actual</h2>";
?>
<p>Aquí, podrás agendar y gestionar tus recordatorios de una manera sencilla y eficiente.</p>
<?php
echo "<table border='1'>";
echo "<tr>";
foreach ($dias_semana as $dia) {
    echo "<th>$dia</th>";
}
echo "</tr>";

// Llenar los días en blanco hasta el primer día de la semana
echo "<tr>";
for ($i = 0; $i < $primer_dia_semana; $i++) {
    echo "<td></td>";
}

for ($dia = 1; $dia <= $num_dias_mes; $dia++) {
  // Comprueba si el día actual es igual al día en el bucle
  $es_dia_actual = ($dia == date("j") && $mes_actual == date("n") && $año_actual == date("Y"));

  // Agrega una clase CSS especial si es el día actual
  $clase_css = $es_dia_actual ? 'dia-actual' : '';

  echo "<td class='$clase_css'>$dia</td>";

  // Saltar a la siguiente fila después de cada séptimo día (fin de semana)
  if (($dia + $primer_dia_semana) % 7 == 0) {
      echo "</tr>";
      if ($dia != $num_dias_mes) {
          echo "<tr>";
      }
  }
}

// Completar la última fila con celdas vacías si es necesario
$ultima_celda = ($num_dias_mes + $primer_dia_semana) % 7;
if ($ultima_celda != 0) {
    for ($i = 0; $i < (7 - $ultima_celda); $i++) {
        echo "<td></td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
</center>
<style>
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        color: black
    }

    th,  {
        padding: 40px;
        text-align: center;
        color: black;
        background-color: ;
    
    }
    td{padding: 10px;
        text-align: center;
        text color: black;
        background-color: white;}

    th {
        text-align: center;
        background-color: ##BFEBC5;
        color: black;
    }

    td {
        border: 1px solid #ccc;
    }

    tr:nth-child(even) td {
        background-color: #ffff;
    }

    tr:last-child td {
        border-bottom: none;
        background-color:#ffff;
    }
    .dia-actual {
        background-color: #BFEBC5; /* Cambia el color de fondo para resaltar */
        font-weight: bold; /* Hace que el texto del día sea más audaz */
    }
</style>


