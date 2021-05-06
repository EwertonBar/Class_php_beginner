<?php

/*CONDICIONAIS
If
Else
Elseif
*/

$numero = 11;

if ($numero == 10):
	echo "trecho a ser executado pois o teste lógico do if é verdadeiro";
elseif ($numero <= 9): 
	echo "trecho a ser executado pois o teste lógico do elseif é verdadeiro";
else:
	echo "trecho a ser executado pois o teste lógico é falso no if e elseif";
endif;
