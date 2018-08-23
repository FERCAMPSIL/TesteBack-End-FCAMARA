<?php

$totalHorasTrabalhadas=$_POST['valor1'];//recuperei o valor digitado no formulario via post
$salarioMinimo=$_POST['valor2'];//recuperei o valor digitado no formulario via post

$imposto=3/100;//fiz o calculo de porcentagem de imposto
$perc=10/100;//fiz o calculo da porcentagem de horas trabalhadas

$horaTrabalhada=$salarioMinimo*$perc;//o salario minimo vindo via post calculado com a porcentagem insere o resultado na variavel $horatrabalhada

$salarioBruto=$totalHorasTrabalhadas*$horaTrabalhada;//o total de horas trabalhadas recebidos via post é multiplicado pelo valor que ja esta na variavel 

$salarioReceber=$salarioBruto-($salarioBruto*$imposto);//a variavel $salarioReceber recebe o calculo do $salarioBruto*$imposto, onde eu tiro a porcentagem e sub
//trai-se do salario bruto a porcentagem colocando o resultado na variavel $salarioReceber

echo"Seu salario do mes sera de : \n" . $salarioReceber;//imprime o salario da variavel $salarioReceber

?>


