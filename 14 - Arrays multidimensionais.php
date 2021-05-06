<?php

//ARRAYS multidimensionais -> contém um ou mais arrays

$times = array("cariocas"=>array("vice"=>"vasco", "campeão"=>"flamengo", "terceiro"=>"botafogo"), 
	"paulistas" => array ("santos", "sao paulo", "palmeiras"), 
	"catarinenses" => array("criciuma", "figueirense"));

echo $times["cariocas"]['campeão'];
echo "<hr>";
foreach ($times["cariocas"] as $key => $value) {
	echo $key.":"." ".$value."<br>";
}