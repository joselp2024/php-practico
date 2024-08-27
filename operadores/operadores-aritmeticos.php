<?php

echo (5 % 3)."\n";           // muestra 2
echo (5 % -3)."\n";          // muestra 2
echo (-5 % 3)."\n";          // muestra -2
echo (-5 % -3)."\n";         // muestra -2


$valorA = 1;
$valorA = $valorA + 10;
//Ahora veamos la forma abreviada:
$valorA+=10;
//Lo mismo aplica para los demás operadores:
$valorA-=10;
$valorA*=10;
$valorA/=10;


echo "\n";
echo 40;
echo "\n";
echo -40.874;
echo "\n";
echo 5 + 9;
echo "\n";
echo 10 % 3;
echo "\n";
echo 4 + 5 * 10;
echo "\n";
echo (4 + 5) * 10;
echo "\n";

$num = 10;

$num++;
echo $num;
echo "\n";

$num--;
echo $num;
echo "\n";

$num += 25;
echo $num;
echo "\n";

echo abs(-100);
echo "\n";

echo pow(2, 4);
echo "\n";

echo sqrt(144);
echo "\n";

echo max(2, 10);
echo "\n";

echo min(2, 10);
echo "\n";

echo round(3.2);
echo "\n";

echo ceil(3.2);
echo "\n";

echo floor(3.9);
echo "\n";
?>