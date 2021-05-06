<?php

//OPERADORES DE ATRIBUIÇÃO

$a = 10;
$b = 5;
echo ($a += $b)."<br>";
echo $a -= $b;
// Vale para os outros operadores aritméticos.

/*OPERADORES DE COMPARAÇÃO

==!
=== -> teste de identidade. 
if (10 === '10'): vai dar falso o teste lógico.
!== -> teste de identidade. 
if (10 !== '10'): vai dar verdadeiro o teste lógico.
<> -> "diferente de"
<
>
>=
<=
<=> -> "spacechip"

EX:if (10 == '10'):
    echo "teste lógico verdadeiro";
else:
    echo "teste lógico é falso";
    
endif; -> teste lógico verdadeiro. 10 int e 10 string são iguais em valor.

Uso do <=>

var_dump(30 <=> 20); -> 1
var_dump(20 <=> 20); -> 0
var_dump(20 <=> 30); -> -1
*/