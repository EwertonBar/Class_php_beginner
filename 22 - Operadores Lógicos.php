<?php
echo "OPERADORES LÓGICOS - permite fazer comparações entre expressões. <br>

e (&& - and)<br>
ou (|| - or)<br>
ou exclusivo (xor) - \"ou é um, ou é outro\"<br>
negação (!)";
echo "<hr>";

$idade = 25;
$nome = "Ewerton";

if (($idade == 24) xor ($nome == "Ewerton")):
	echo "verdadeiro";

else:
	echo "falso";

endif;
/*
EX:
$idade = 25;
$nome = "Ewerton";

if (($idade == 24) xor ($nome == "Ewerton")):
    echo "verdadeiro";
else:
        echo "falso";
endif; -> verdadeiro

EX:
usando ! Eu nego o valor da expressão. 
$idade = 25;
$nome = "Ewerton";

if (!($idade == 25) && ($nome == "Ewerton")):
    echo "verdadeiro";
else:
        echo "falso";
endif; -> falso.
*/