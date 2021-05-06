<?php
/*$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
if (is_array($nomes)):
	echo "É um array";
else:
	echo "não é um array";
endif;

in_array(needle, haystack) - verifica se um valor "needle/agulha" existe em alguma posição "haystack/palheiro" do array;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
echo in_array("Felipe", $nomes); -> 1 que significa True. Se não retornar nada é por que é falso.

array_keys(input) - retorna um novo array com as chaves do array passado como parâmetro;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$keys = array_keys($nomes);
print_r($keys); - > Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 ); criou um array com os índices/keys do array $nomes.

array_values(input) - retorna um novo array com os valores do array passado como parâmetro;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$values = array_values($nomes);
print_r($values); -> Array ( [0] => Rodrigo [1] => Felipe [2] => Maria [3] => José ); criou um array com os valores do array $nomes.

array_merge(array1, array2) - agrega o conteúdo dos dois arrays; 

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$idades = array ("18", "20", "50", "15");
$merge = array_merge($nomes, $idades);
print_r($merge); ->Array ( [0] => Rodrigo [1] => Felipe [2] => Maria [3] => José [4] => 18 [5] => 20 [6] => 50 [7] => 15 ); 

array_pop(array) - exclui a última posição do array;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$idades = array ("18", "20", "50", "15");
$merge = array_merge($nomes, $idades);
array_pop($merge);
print_r($merge); -> Array ( [0] => Rodrigo [1] => Felipe [2] => Maria [3] => José [4] => 18 [5] => 20 [6] => 50 );

array_shift(array) - exclui a primeira posição do array;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$idades = array ("18", "20", "50", "15");
$merge = array_merge($nomes, $idades);
array_shift($merge);
print_r($merge); -> Array ( [0] => Felipe [1] => Maria [2] => José [3] => 18 [4] => 20 [5] => 50 [6] => 15 );

array_unshift(array, var, var) - adiciona um ou mais elementos no início do array;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
array_unshift($nomes, "Pedro", "Carla");
print_r($nomes); -> Array ( [0] => Pedro [1] => Carla [2] => Rodrigo [3] => Felipe [4] => Maria [5] => José );

array_push(array, var, var) - adiciona um ou mais elementos no final do array;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
array_push($nomes, "Pedro", "Carla");
print_r($nomes); -> Array ( [0] => Rodrigo [1] => Felipe [2] => Maria [3] => José [4] => Pedro [5] => Carla );

array_combine(keys, values) - mescla os dois arrays passados;

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$idades = array ("18", "20", "50", "15");
$combine = array_combine($nomes, $idades);
print_r($combine); -> Array ( [Rodrigo] => 18 [Felipe] => 20 [Maria] => 50 [José] => 15 );

array_sum(array) - calcula a soma dos elementos de um array;

$idades = array ("18", "20", "50", "15");
$soma = array_sum($idades);
print_r($soma); -> 103;

explode(delimiter, string) - transforma string em array;

$data = "10/02/1993";
$novaData = explode("/", $data);
print_r($novaData); -> Array ( [0] => 10 [1] => 02 [2] => 1993 );

implode(glue, pieces) - transforma array em string; 

$nomes = array ("Rodrigo", "Felipe", "Maria", "José");
$string = implode(" ", $nomes);
print_r($string); -> Rodrigo Felipe Maria José;
