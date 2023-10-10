
<style>
    body {
    font-family: Arial, sans-serif;
    text-align: center;
}

h1 {
    color: #333;
}

form {
    margin: 20px auto;
    width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f4f4f4;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}
</style>




<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Macronutrientes</title>
</head>
<body>
    <h1>Calculadora de Macronutrientes</h1>

    <form method="post">
        <label for="calorias">Calorías Totales:</label>
        <input type="text" name="calorias" id="calorias" required>
        <br><br>

        <label for="proporcion_proteinas">Proporción de Proteínas (%):</label>
        <input type="text" name="proporcion_proteinas" id="proporcion_proteinas" required>
        <br><br>

        <label for="proporcion_carbohidratos">Proporción de Carbohidratos (%):</label>
        <input type="text" name="proporcion_carbohidratos" id="proporcion_carbohidratos" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $calorias = $_POST["calorias"];
        $proporcion_proteinas = $_POST["proporcion_proteinas"];
        $proporcion_carbohidratos = $_POST["proporcion_carbohidratos"];

        // Calcular cantidades en gramos
        $proteinas = ($calorias * $proporcion_proteinas) / 100 / 4; // 4 calorías por gramo de proteína
        $carbohidratos = ($calorias * $proporcion_carbohidratos) / 100 / 4; // 4 calorías por gramo de carbohidrato
        $grasas = ($calorias - ($proteinas * 4) - ($carbohidratos * 4)) / 9; // 9 calorías por gramo de grasa

        echo "<h2>Resultados:</h2>";
        echo "Proteínas: " . round($proteinas, 2) . " gramos<br>";
        echo "Carbohidratos: " . round($carbohidratos, 2) . " gramos<br>";
        echo "Grasas: " . round($grasas, 2) . " gramos<br>";
    }
    ?>
</body>
</html>
