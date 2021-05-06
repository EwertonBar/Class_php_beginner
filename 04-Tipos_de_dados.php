<?php
/*Dados Escalares*/
//String -> "Olá mundo"

$nome = "1.1";
var_dump($nome);
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";
   
//inteiros -> -1,1,0
   
$num = -5;
var_dump($num);
if(is_int($num)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";   

//float -> -1.0,1.1,0.5
   
$altura = -5.0;
var_dump($altura);
if(is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";   

//boolean -> true, false
   
$admin = true;
var_dump($admin);
if(is_bool($admin)):
	echo "É um booleano";
else:
	echo "Não é um booleano";
endif;
echo "<hr>";   

/*Dados Compostos*/

//Array 
$carros = array('Gol', "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);

echo "<hr>";

//Object
class Cliente { //classe
	public $nome;  // atributo
	public function atribuirNome($nome) { // método
		$this -> $nome = $nome;
	} 
}
$cliente = new Cliente();
$cliente -> atribuirNome("Ewerton"); 
var_dump($cliente);

echo "<hr>";

/*Especiais*/

//Null
$cidade = Null;
var_dump($cidade);
echo "<hr>";

// Resource - é um tipo de dado para fazer refêrencia com resursos externos (banco de dados, manipulação de arquivos)
