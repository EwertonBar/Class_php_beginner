<?php

//ARRAYS ASSOCIATIVOS - quando as chaves/índices são strings

$pessoa = array ("nome" => "Rodrigo", "idade" => 23, "altura"=>1.75);
print_r($pessoa);
echo "<hr>";
echo $pessoa["altura"];
echo "<hr>";
$pessoa["cidade"] = "Itabuna"; // para adicionar uma chave e valor ao array.


foreach ($pessoa as $key => $value) {
		echo $key.": ".$value."<br>";
}