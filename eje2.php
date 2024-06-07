<?php

function serieFibonacci (){

    $num= intval(readline("Ingrese un numero entero: "));
    $n=0;
    $n2=1;
    echo $n."\n";

    for($i=0; $i < $num; $i++){
        $temp=$n;
        $n=$n2;
        $n2=$temp + $n;
        echo $n. "\n";
    }

}
 echo serieFibonacci();


?>