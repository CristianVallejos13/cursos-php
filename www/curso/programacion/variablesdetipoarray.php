<?php

$array1 = array('Jhonatan','Cristina','Damaris','Jonah', 'Joel', 'Yamel' );

var_dump($array1);

echo '<br>';

echo 'Jhonatan esta en el array numero 0 y el resultado es: ' . $array1[0];

//esta es la segunda variable de tipo array
$array2 = array(
'clave1' => 'Jhonatan',
'clave2' => 'Cristina'
);


echo '<br><br>';
var_dump($array2);

echo '<br>';

echo 'Jhonatan esta en el array con la clave1 y el resultado es: ' . $array2['clave1'];

?>