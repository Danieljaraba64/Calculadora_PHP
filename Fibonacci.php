<?php
function fibonacci($n) {
    $secuencia = [0, 1];

    while (true) {
        $siguiente = $secuencia[count($secuencia) - 1] + $secuencia[count($secuencia) - 2];
        if ($siguiente > $n) {
            break;
        }
        $secuencia[] = $siguiente;
    }

    return $secuencia;
}

// Ejemplo de uso
$resultado = fibonacci(13);
print_r($resultado); 
?>
