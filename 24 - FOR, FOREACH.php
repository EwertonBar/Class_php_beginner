<?php

echo "FOR...FOREACH<br><hr>";


for ($c = 0; $c < 11; $c++) {
	echo "Contador é  $c<br>";}
	echo "<hr>";

$cores = array ("vermelho", "azul", "amarelo");
foreach ($cores as $indice => $value){
	echo $indice, " - ", $value, "<br>";
}
