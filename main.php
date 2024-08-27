<?php

$words = array("sol","luna","cielo","lluvia","estrellas");


$form= "<form action='analisis.php'>";

for ($i = 0; $i < count($words); $i++){
    $form.=
    "la palabra: ".str_shuffle($words[$i])." " .
    "<input type='text' name='palabra".$i."'>".
    "<br>";
}

$button = "<button type='submit'>Enviar</button>";
$close = "</form>";

echo $form.$button.$close;

?>