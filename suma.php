<?php
if (isset($_POST['submit'])) {
    // Obtener los números del formulario
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $suma = $numero1 + $numero2;

 
    echo "La suma de $numero1 y $numero2 es: $suma";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Suma</title>
</head>
<body>
    <h1>Calculadora de Suma</h1>
    
    <!-- Formulario para que el usuario ingrese los números -->
    <form method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br><br>

        <button type="submit" name="submit">Sumar</button>
    </form>
</body>
</html>
