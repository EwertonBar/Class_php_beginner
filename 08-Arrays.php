<?php
// Arrays
$carro = array('BMW', 'Fiat Uno', 'Gol', 'Ferrari');

print_r($carro);
echo "<br>", $carro[0];
echo "<hr>";

$carro[4]="amarok";
echo $carro[4];
var_dump($carro);
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos["melhor"] = "BMW";
print_r($motos);
echo "<hr>";

$clientes = ["a", "b", "c"];
print_r($clientes);
echo "<hr>";

// Count
$itens = ['e','d','f'];
echo count($itens);
echo "<hr>";

// Foreach - loop para percorrer um array

foreach ($carro as $valor) {
	echo $valor."<br>";
}
echo "<hr>";

//ARRAYS ASSOCIATIVOS

$pessoa =  array("nome" => "Rodrigo", "idade" => 23, "altura"=>1.75);
$pessoa["cidade"] = "Itabuna";

foreach ($pessoa as $key => $value) {
		echo $key.$value."<br>";
}
echo "<hr>";

//ARRAYS multidimensionais -> contém um ou mais arrays
$times = array("cariocas"=>array("vice"=>"vasco", "campeão"=>"flamengo", "terceiro"=>"botafogo"), 
	"paulistas" => array ("campeão"=>"santos", "vice"=>"sao paulo", "terceiro"=>"palmeiras"), 
	"catarinenses" => array("campeão"=>"criciuma", "vice"=>"figueirense"));
echo $times["cariocas"]['campeão'];
echo "<hr>";

foreach ($times["cariocas"] as $key => $value) {
	echo $key.":"." ".$value."<br>";
}

