<?php


$estudiante = 'Jhonatan';

/*
90 - 100 = A
80 - 89 = B
70 - 79 = C
Si es menor
D
*/

$nota = 68;


if ( ($nota >=90) && ($nota<=100) ) {
    echo 'El estudiante ' .$estudiante . 'tiene una calificacion de A';
} else if ( ($nota >=80) && ($nota<=89) ) {
    echo 'El estudiante ' .$estudiante . 'tiene una calificacion de B';
} 
else if ( ($nota >=70) && ($nota<=79) ) {
    echo 'El estudiante ' .$estudiante . 'tiene una calificacion de C';
}else {
    echo 'El estudiante ' .$estudiante . 'tiene una calificacion de D';
}





?>