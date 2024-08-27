utilizan con frecuencia en la programacin. A continuación se presentan las 15 funciones matemáticas más utilizadas en PHP, junto con ejemplos de uso en aplicaciones reales.

1. abs()
La función abs() se utiliza para obtener el valor absoluto de un número.

<?php
$numero = -4.2;
$valor_absoluto = abs($numero);
echo $valor_absoluto;
// Salida esperada: 4.2
?>
2. sqrt()
La función sqrt() se utiliza qpara obtener la raíz cuadrada de un número.

<?php
$numero = 16;
$raiz_cuadrada = sqrt($numero);
echo $raiz_cuadrada;
// Salida esperada: 4
?>
3. pow()
La función pow() se utiliza para elevar un número a una potencia.

<?php
$base = 2;
$exponente = 3;
$potencia = pow($base, $exponente);
echo $potencia;
// Salida esperada: 8
?>

4. exp()
La función exp() se utiliza para obtener el valor de la función exponencial de un número.

<?php
$numero = 2;
$exponencial = exp($numero);
echo $exponencial;
// Salida esperada: 7.3890560989307
?>


5. log()
La función log() se utiliza para obtener el logaritmo natural de un número.

<?php
$numero = 10;
$logaritmo = log($numero);
echo $logaritmo;
// Salida esperada: 2.302585092994
?>


6. log10()
La función log10() se utiliza para obtener el logaritmo base 10 de un número.

<?php
$numero = 100;
$logaritmo = log10($numero);
echo $logaritmo;
// Salida esperada: 2
?>


7. min()
La función min() se utiliza para obtener el valor mínimo de un conjunto de números.

<?php
$numeros = array(3, 7, 1, 8, 2);
$minimo = min($numeros);
echo $minimo;
// Salida esperada: 1
?>


8. max()
La función max() se utiliza para obtener el valor máximo de un conjunto de números.

<?php
$numeros = array(3, 7, 1, 8, 2);
$maximo = max($numeros);
echo $maximo;
// Salida esperada: 8
?>


9. rand()
La función rand() se utiliza para obtener un número aleatorio entre dos valores.

<?php
$aleatorio = rand(1, 100);
echo $aleatorio;
// Salida esperada: un número aleatorio entre 1 y 100
?>


10. round()
La función round() se utiliza para redondear un número.

<?php
$numero = 3.14159;
$redondeado = round($numero);
echo $redondeado;
// Salida esperada: 3
?>


11. floor()
La función floor() se utiliza para redondear un número hacia abajo.

<?php
$numero = 3.9;
$redondeado = floor($numero);
echo $redondeado;
// Salida esperada: 3
?>



12. ceil()
La función ceil() se utiliza para redondear un número hacia arriba.

<?php
$numero = 3.1;
$redondeado = ceil($numero);
echo $redondeado;
// Salida esperada: 4
?>


13. sin()
La función sin() se utiliza para obtener el seno de un ángulo en radianes.

<?php
$angulo = 0.5;
$seno = sin($angulo);
echo $seno;
// Salida esperada: 0.4794255386042
?>


14. cos()
La función cos() se utiliza para obtener el coseno de un ángulo en radianes.

<?php
$angulo = 0.5;
$coseno = cos($angulo);
echo $coseno;
// Salida esperada: 0.87758256189037
?>


15. tan()
La función tan() se utiliza para obtener la tangente de un ángulo en radianes.

<?php
$angulo = 0.5;
$tangente = tan($angulo);
echo $tangente;
// Salida esperada: 0.54630248984379
?>

