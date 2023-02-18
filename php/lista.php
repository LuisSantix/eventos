<?php
    $total = 0;
    if(isset($_POST["enviar"])){
        if(isset($_POST["prod"])){
            if(isset($_POST["prod"])>0){
                echo "Cantidad  - Subtotal";
                foreach ($_POST["prod"] as $value){
                    echo "<br/> $value"; 
                    if($value == "salon"){
                        echo " - 3000";
                        $total += 3000;
                    }else if($value == "sillas"){
                        echo " - 1000";
                        $total += 1000;
                    }else if($value == "mesas"){
                        echo " - 2500";
                        $total += 2500;
                    }else if($value == "decoracion"){
                        echo " - 8000";
                        $total += 8000;
                    }else if($value == "buffet"){
                        echo " - 8000";
                        $total += 8000;
                    }else if($value == "bar"){
                        echo " - 10000";
                        $total += 10000;
                    }
                }
                echo "<br/> El total a pagar es de $$total MXN";
            }
        }
    }
?>