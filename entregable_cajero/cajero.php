<?php

$ingre=intval(readline("Ingrese el monto de dinero inicial: "));

while (True){
    print("Opcion 1 para consultar su saldo"."\n");
    print("Opcion 2 para consignar mas dinero"."\n");
    print("Opcion 3 para retirar dinero"."\n");
    print("Opcion 4 para salir"."\n");

    $op=(readline("¿Que desea hacer?: "  ));

    if($op==1){

        function consultarSaldo($ingre){
            $ingreso=$ingre;
            echo "Su saldo inicial es de $ingreso"."\n";
            return $ingreso;
    }
    consultarSaldo($ingre);
    }

        if($op==2){
            function consignar ($ingre){
                $nuevo= intval(readline("Ingrese el monto que desea consignar: "));
                $sum=$ingre+$nuevo;
                echo "Ha consignado $nuevo en su cuenta "."\n"."Su saldo total es de $sum"."\n";
                $ingre=$sum; // Aqui queria actualizar la variable pero no pude
                return $nuevo;
            }
            consignar($ingre);
        }
            if($op==3){

                function retirar($ingre){
                    $retiro=intval(readline("¿cuanto dinero desea retirar?: "));
                    $reti=$ingre-$retiro;
                        if($retiro<$ingre){
                            echo "Su retiro ha sido exitoso, su saldo es de $reti"."\n"." ";
                        }
                        else
                        echo "saldo insuficiente, lo sentimos"."\n";
            };
            retirar($ingre);
            }

                if($op==4){
                    echo "saliendo...";
                    break;
                }
            
}

?>