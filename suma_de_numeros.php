  <?php
    function suma_numeros($lista) {
        return array_sum($lista);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST["numeros"];
        
        // Convertir la cadena a array
        $numeros = array_map('intval', explode(",", $entrada));
        
        // Calcular la suma
        $resultado = suma_numeros($numeros);
        
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de Números</title>
</head>
<body>
    <h2>Suma de Números</h2>

    <form method="post">
        <label>Ingresa números separados por coma:</label><br>
        <input type="text" name="numeros" placeholder="Ej: 1,2,3,4,5"><br><br>
        <input type="submit" value="Calcular suma">
    </form>