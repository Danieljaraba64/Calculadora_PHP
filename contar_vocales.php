<form method="post">
    <input type="text" name="texto">
    <input type="submit" value="Contar vocales">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = strtolower($_POST["texto"]);
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vocales)) {
            $contador++;
        }
    }

    echo "Cantidad de vocales: $contador";
}
?>