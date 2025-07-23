<?php
function es_palindromo($cadena) {
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    return $cadena === strrev($cadena);
}

echo es_palindromo("reconocer") ? "True" : "False";
?>
