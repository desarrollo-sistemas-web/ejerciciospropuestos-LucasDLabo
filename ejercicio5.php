<?php

// Crea una funcion llamada "slug" que reciba un string y lo convierta en un slug.
// Un slug es una versión de un string para hacerlo legible en una URL, por ej: "Hola Mundo" se convierte en "hola-mundo".
// El string deberá ser convertido a minúsculas y los espacios deberán ser reemplazados por guiones.
// La función deberá devolver el nuevo string.
// Si el string está vacío deberá devolver "error".


// Aquí tu código

function slug($cadena){
    $cadena = strtolower($cadena);
    if ($cadena != NULL AND $cadena != " "){
        return str_replace(" ", "-", $cadena);
    }else{
        return  "error";
    }
}


// TESTS
assert(slug("Hola Mundo") == "hola-mundo");
assert(slug("Hola Mundo Cruel") == "hola-mundo-cruel");
assert(slug("Hola") == "hola");
assert(slug("") == "error");
assert(slug(" ") == "error");




/**
 * Pista 😁
 * https://www.php.net/manual/es/function.strtolower.php
 * https://www.php.net/manual/es/function.str-replace.php 
**/