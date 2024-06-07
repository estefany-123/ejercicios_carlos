<?php   

function sumaDigitos (){

    $nume= intval(readline("ingrese un numero entero: "));

    $suma = 0;

    $cadena= (string)$nume;

    for ($i = 0; $i < strlen($cadena); $i++){

        $suma += intval ($cadena[$i]);
    }

    return $suma;

}

echo "la suma es : ". sumaDigitos(); /* aqui si le concateno la variable $nume me arroja error*/ 

?>