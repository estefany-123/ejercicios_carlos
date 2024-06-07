<?php

function FierroAlv (){

    for ($i=1; $i<=100; $i++){

       
        if ($i %3 == 0){
            echo $i ." = Peso"."\n";

        }

        if ($i %5 == 0){
            echo $i." = Pluma"."\n";

        }

        if ($i %3 == 0 && $i%5 == 0){
            echo $i." = PesoPluma"."\n";

        }
    }   


    }
    
    echo FierroAlv();



?>