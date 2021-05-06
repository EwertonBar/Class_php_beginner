<?php

/* WHILE/DO...WHILE
EX while:
*/
echo "WHILE e DO...WHILE<br><hr>";
$contador = 1;
while ($contador <=10):
	echo "Contador é $contador<br>";
	$contador++;
endwhile;

//EX do...while:
echo "<hr>";
$contador = 1;
do {
	echo "Contador é: $contador<br>";
	$contador++;
} while ($contador <=10);
