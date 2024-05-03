<?php

// Genera una función "palindromo" que reciba un string y determine si es un palíndromo (true) o no (false).
// Un palíndromo es una palabra o frase que se lee igual en un sentido que en otro.
// La función deberá devolver un booleano.
// La función deberá ignorar los espacios, los signos de puntuación y deberá ser case-insensitive.


// Aquí tu código
function noAcentos ($txt){
    $acentos = ["á","é","í","ó","ú"];
    $acentosNO = ["a","e","i","o","u"];
    return str_replace($acentos, $acentosNO,$txt);
}

function palindromo ($texto){
    $texto = strtolower($texto);
    $texto = str_replace(" ", "",$texto);

    $caracteres = strlen($texto);
    $texto = noAcentos($texto);
    $invertido = strrev($texto);
    if ($caracteres % 2 != 0 ){
        if ($texto == $invertido){
            return true;
        }
    }else{
        return false;
    }
    
}

// TESTS
assert(palindromo("Anita lava la tina") == true);
assert(palindromo("A mamá Roma le aviva el amor a papá y a papá Roma le aviva el amor a mamá") == true);
assert(palindromo("Anita lava la tina y la atina") == false);
