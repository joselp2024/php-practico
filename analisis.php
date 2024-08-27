<?php



$palabras = array("sol","luna","cielo","lluvia","estrella");

for ($i = 0; $i < count($palabras); $i++) {
    if($_REQUEST["palabra".$i] == $palabras[$i]){
        echo"la palabra ingresada es correcta"."</br>";
    }else{
        echo "la palabra es incorrecta, la correta es : $palabras[$i]"."</br>";
    }
}
?>