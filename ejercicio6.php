<?php

// Escribe una función llamada "primos" que encuentre y almacene en un array todos los números primos entre 1 y 100. 
// Luego, imprime este array.
// Un número primo es un número que solo es divisible por 1 y por sí mismo.

// Aquí tu código
    
    function primos(){
        for ($i = 1; $i <= 100; $i++){
            if ($i > 1){
                if ($i == 2 or $i % 2 != 0){
                    if ($i == 3 or $i % 3 != 0){
                        if ($i == 5 or $i % 5 != 0){
                            if ($i == 7 or $i % 7 != 0){
                                $primos[] = $i;
                            } 
                        } 
                    }
                }
            }
            
        }
        return $primos;
    }

// TESTS
assert(primos() == [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97]);