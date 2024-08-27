<?php
/*
class Reto1{

    public function Estudiantes($estudiantes){
        foreach($estudiantes as $edad){
            $this->Clasificar($edad);
        }
    }

    private function Clasificar($edad){
        if($edad >0&& $edad<5){
            $piso = "inferior";
        }else if($edad >= 5 && $edad<=7){
            $piso = "media";
        }else if($edad >7){
            $piso = "superior";
        } else{
            $piso = "bodega de al lado";
        }

        switch($piso){
            case "inferior":
                echo"El estudiante de $edad años tendra su almacenamiento en la parte $piso \n";
                break;
                case "media":
                    echo"El estudiante de $edad años tendra su almacenamiento en la parte $piso\n";
                    break;
                    case "superior":
                        echo"El estudiante de $edad años tendra su almacenamiento en la parte $piso\n";
                        break;
                        default: "al no tener edad su almacenamiento ser an la $piso\n";
                        break;
        }
    }
}


$estudiantes = [4,6,10,"undefined"];
$Reto1 = new Reto1;
$Reto1->Estudiantes($estudiantes); */

class arbol{
    public function crear($nivel){
        for($i=0; $i<=$nivel;$i++){
            $pintar = $i;
                while($pintar <=$i && $pintar > 0){
                    echo "*";
                    $pintar--;
                }
                echo "\n";
        }
    }
}

$arbol =  new arbol;
$arbol->crear(5);