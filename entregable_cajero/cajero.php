<?php

$ingre=intval(readline("Ingrese el monto de dinero inicial: "));

while (True){
    print("Opcion 1 para consultar su saldo"."\n");
    print("Opcion 2 para consignar mas dinero"."\n");
    print("Opcion 3 para retirar dinero"."\n");
    print("Opcion 4 para salir"."\n");

    $op=(readline("¿Que desea hacer?" ));

    if($op==1){

        function consultarSaldo($ingre){
            $ingreso=$ingre;
            echo "Su saldo inicial es de $ingreso"."\n";
            return $ingreso;
           
    }
    consultarSaldo($ingre);
    }

    elseif($op==2){
        function consignar (){
            $nuevo= intval(readline("Ingrese el monto que desea consignar: "));
            echo "Ha consignado $nuevo en su cuenta "."\n";
            return $nuevo;
        }
        consignar();
    }

    if($op==3){

        function retirar(){
            $retiro=intval(readline("¿cuanto dinero desea retirar?: "));
            if($retiro>$ingre){
                echo "no tiene monto suficiente"."\n";

            }
            
            return $retiro;
        }
        retirar();

    }

    if($op==4){
        echo "saliendo...";  
    }


}


?>