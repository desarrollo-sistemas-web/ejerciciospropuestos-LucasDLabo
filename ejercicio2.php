<?php

// Desarrolla una función con el nombre "perimetroTriángulo" para calcular el perímetro de un triángulo.
// Ten en cuenta que primero hay que validar que las medidas sean correctas para un triángulo. 🤓
// En caso de que no sea un triángulo, la función deberá devolver -1.


// Aquí tu código

function perimetroTriangulo($lado1, $lado2, $lado3){
    if ($lado1 + $lado2 > $lado3 AND $lado1 + $lado3 > $lado2  AND $lado3 + $lado2 > $lado1){
        return $lado1 + $lado2 + $lado3;
    }else{
        return -1;
    }
    
}

// TESTS
assert(perimetroTriangulo(1, 1, 1) == 3);
assert(perimetroTriangulo(2, 2, 2) == 6);
assert(perimetroTriangulo(2, 3, 4) == 9);
assert(perimetroTriangulo(3, 4, 5) == 12);
assert(perimetroTriangulo(1, 1, 3) == -1);
