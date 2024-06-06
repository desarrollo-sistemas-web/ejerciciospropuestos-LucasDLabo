<?php

// Escribe una función llamada "primos" que encuentre y almacene en un array todos los números primos entre 1 y 100. 
// Luego, imprime este array.
// Un número primo es un número que solo es divisible por 1 y por sí mismo.

// Aquí tu código
    primos();
    function primos(){
        $primos = [];
        for ($numeros = 1; $numeros <= 100; $numeros++){
            $probabilidadPrimo = 0;
            if ($numeros > 1){
                for ($mult = 1; $mult <=$numeros; $mult++){
                    if ($numeros % $mult == 0){
                        $probabilidadPrimo += 1;
                    }
                }
                if ($probabilidadPrimo == 2){
                    //echo "El número $numeros es primo<br>";
                    $primos[] = $numeros;
                }
            }
        }
        return $primos;
    }

// TESTS
assert(primos() == [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97]);