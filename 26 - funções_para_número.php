<?php

/*FUNÇÕES PARA NÚMEROS

number_format ( float $number , int $decimals , string $dec_point , string $thousands_sep ) : string  -> Aceita um, dois ou quatro parâmetros.
EX:*/

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo $preco;
echo "<hr>";

//round ( float $val , int $precision = ? ) : float Retornar um valor arredondado  de val em precision casas decimais  precision pode ser negativo ou zero (padrão).  

//ceil ( float $value ) : floatRetorna o próximo maior valor inteiro arredondando para cima do value, se fracionário.

//floor ( float $value ) : float   -> Retorna o próximo menor valor inteiro, arredondando o valor se necessário.

//mt_rand ( ) : int- mt_rand ( int $min , int $max ) : int   -> Se chamado sem os parâmetros opcionais min e max, mt_rand() retornará um pseudo inteiro randômico entre 0 e getrandmax(). Se você precisa de um número aleatório entre 5 e 15 (inclusive), por exemplo, utilize mt_rand (5, 15).
