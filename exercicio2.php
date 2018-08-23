<?php

$v1=$_GET['valor1'];//pego do formularios os valores digitados na chave e coloco na variavel $v1 e $v2
$v2=$_GET['valor2'];
$primo;
//entra no laço enquanto o maior valor for menor do que o digitado na variavel $v2
 for ($i = $v1; $i <= $v2; $i++) {
	 if ($i == 0 || $i == 1) {
		 //números zero e 1 não são primos
		 $primo = 0;
	 } else {
		 $primo = 1; //considero inicialmente que o número é primo
		 for($j = 2; $j < $i; $j++) { //tento provar que ele não é primo
			 if ($i % $j == 0) {
				$primo = 0; //consigo provar que ele não é primo
			 }
		 }
	 }
	 if ($primo == 1) {
         echo($i);//imprime na tela os numeros primos na variavel $i
         echo"<br>";
	 }
 }
 
