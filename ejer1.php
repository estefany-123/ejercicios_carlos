<?php 

function palindromo (){
    $pala= readline("Digite la palabra para verificar si es palindromo: ");
    $pala = strtolower($pala);
    $espace= str_replace(" ","", $pala);
    $inver= strrev($espace);

    return $pala == $inver;

}
var_dump (palindromo());