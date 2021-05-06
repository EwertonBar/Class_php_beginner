<?php
//ARRAYS

$carro = array('BMW', 'Fiat Uno', 'Gol', 'Ferrari');

print_r($carro); // Função especial para imprimir Array.
echo "<br>";
echo $carro[0]; // Para imprimir com echo tenho que indicar o índice.
echo "<hr>";
//Posso mudar o valor do índice usando "=>"
$carro = array(1=>'BMW', 2=>'Fiat Uno', 4=>'Gol', 8=>'Ferrari');

//Para adicionar um valor no array
$carro[]="Amorok"; // vai ser adicionada no final da lista com índice posterior ao último.

//Outra maneira de declarar um array
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos["melhor"] = "BMW";
print_r($motos);
echo "<hr>";
//Outra maneira de declarar um array
$clientes = ["a", "b", "c"];

//COUNT - função para contar quantos itens num array
$itens = ['e','d','f'];
echo count($itens);
echo "<hr>";
//FOREACH - loop para percorrer um array

foreach ($carro as $valor) {
	echo $valor."<br>";
}
