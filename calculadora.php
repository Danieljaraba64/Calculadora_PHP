<?php
// Verificar si se ha enviado el formulario
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    // Realizar la operación según la elección
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: División por 0";
            }
            break;
        default:
            $result = "Operación no válida";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
</head>
<body>
    <h1>Calculadora en PHP</h1>
    <form method="POST">
        <input type="number" name="num1" placeholder="Número 1" required><br><br>
        <input type="number" name="num2" placeholder="Número 2" required><br><br>
        
        <label for="operation">Operación:</label><br>
        <input type="radio" name="operation" value="add" required> Sumar<br>
        <input type="radio" name="operation" value="subtract"> Restar<br>
        <input type="radio" name="operation" value="multiply"> Multiplicar<br>
        <input type="radio" name="operation" value="divide"> Dividir<br><br>

        <button type="submit" name="submit">Calcular</button><br><br>
    </form>

    <?php
    // Mostrar el resultado
    if (isset($result)) {
        echo "<h3>Resultado: $result</h3>";
    }
    ?>
</body>
</html>
