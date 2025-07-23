function fibonacciHasta13() {
    let secuencia = [0, 1];

    while (true) {
        let siguiente = secuencia[secuencia.length - 1] + secuencia[secuencia.length - 2];
        if (siguiente > 13) break;
        secuencia.push(siguiente);
    }

    return secuencia;
}

console.log(fibonacciHasta13());
