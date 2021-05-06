<?php
/*
Condicionais

If
Else
Elseif

$numero = 11;

if ($numero == 10):
	echo "trecho a ser executado pois o teste lógico do if é verdadeiro";
elseif ($numero <= 9): 
	echo "trecho a ser executado pois o teste lógico do elseif é verdadeiro";
else:
	echo "trecho a ser executado pois o teste lógico é falso no if e elseif";
endif;
*/


$numero = 11;

if ($numero == 10):
	echo "trecho a ser executado pois o teste lógico do if é verdadeiro";
elseif ($numero <= 9): 
	echo "trecho a ser executado pois o teste lógico do elseif é verdadeiro";
else:
	echo "trecho a ser executado pois o teste lógico é falso no if e elseif";
endif;
echo "<hr>";
echo "<p>"."teste"."</p>";
echo "<p>"."algo"."</p>";
echo "teste"."<br />";
echo "algo"."<br />";


$media = 6;

echo ($media >= 7) ? "Aprovado" : "Reprovado";