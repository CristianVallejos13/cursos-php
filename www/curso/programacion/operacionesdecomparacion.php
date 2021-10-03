<?php


$num1 = 12;
$num2 = 14;
$num3 = 15;

$num4 = 10;
$num5 = 11;


if ($num1 > $num2) {
    echo 'la variable $num1 es mayor que $num2';
}
else if ($num1 < $num2) {
    echo 'la variable $num1 es menor que $num2';

}




if ($num2 >= $num3) {
    echo '<br>la variable $num2 es mayor o igual que $num3';
} else if ($num2 <= $num3) {
    echo '<br>la variable $num2 es menor o igual que $num3';
}


if ($num4 == $num5) {
    echo '<br> Son iguales los valores que estan en las variables';
}
else if ($num4 != $num5) {
    echo '<br> Son diferentes';
}


if ($num4 == $num5) {
    echo '<br> Son iguales los valores que estan en las variables';
}
else {
    echo '<br> Son diferentes';
}


?>