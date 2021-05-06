<?php
//Escopo de varáveil -> ligação com seu contexto

//ESCOPO GLOBAL
$nome = "Ewerton";
$a = 1;
$b = 5;
$c = 7;

function exibeNome() { 
//ESCOPO LOCAL
	global $nome; //para minha variável se tornar global e conseguir acessar os valores fora da função.
	echo $nome;
}
exibeNome();
echo "<hr>";

function exibeCidade (){
//ESCOPO LOCAL
	global $cidade;	
	$cidade = "Rio de Janeiro";
}
exibeCidade();
echo $cidade; //se eu não definir dentro da função a variável como local, na hora de imprimir na tela vai dar erro de variável não definida

echo"<hr>";
//Acessar variáveis com o array especial do php -> $GLOBALS['variable']
function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();