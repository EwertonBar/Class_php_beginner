<?php

//FUNÇÕES PARA STRINGS

//strtoupper ($var) - coloca tudo em maiúscula.

//strtolower ($var) - coloca tudo em minúscula.

//substr($var, star, lenght) - retorna uma parte da string com início no start, posso escolher quantos caracteres eu quero.

//str-pad(input, pad_length, STR_PAD_LEFT)

//STR_PAD_RIGHTSTR_PAD_BOTH - distrubui  

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "-");
echo $novoObjeto."<br>";
echo "<hr>";

//str_repeat (input, multiplier)
$string = str_repeat("Sucesso",5);
echo $string;
echo "<hr>";

//strlen()
$string = "Olá mundo Lindo";
echo strlen($string);
echo "<hr>";

//str_replace (search, replace, subject) 

$texto = "beterraba é boa de comer";
$novoTexto = str_replace("beterraba", "chocolate", $texto);
echo $novoTexto;
echo "<hr>";

/*strpos (string $haystack, string $needle, int $offset=?) : int
 encontra a primeira ocorrência.  Offset é se eu quiser indicar onde começar a busca.*/

$texto = "beterraba é boa de comer";
echo strpos($texto, "boa");// -> 13 que significa onde inicia a palavra.

/*strrpos ( string $haystack , string $needle , int $offset = ? )
encontra a última ocorrência.*/