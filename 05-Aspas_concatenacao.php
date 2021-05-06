<?php
/*Aspas simples são literais. Tudo que estiver dentro, inclusive variáveis, será considerado "texto" e será impresso na tela.*/
$nome = 'Ewerton';
echo 'Meu nome é '.$nome;

/*Aspas duplas são interpretativas. Havendo variável será identificada e interpretada.*/

echo "<hr>";
$nome = 'Ewerton';
echo "Meu \"nome\" é $nome";