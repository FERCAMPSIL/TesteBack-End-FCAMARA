<?php

    //declaraçao das variaveis
    $perc;
    $aumSal;
    $anoAtual;
    $salario=1000;
    $novosalario;

    
    //Salario referente a porcentegam  de aumento entre 2005 e 2006. 
     $perc = 1.5/100;
     //o resultado do aumento em 2006 guardo na variavel $aumSal.
     $aumSal = $salario+($salario *$perc);
    // crio uma variavel para pegar do sistema a data atual.
    $anoAtual = date('Y');
    //Como ja comecamos com 2006 acima, vamos continuar em 2006 ate a data atual do sistema.
    for ($i=2006;$i<=$anoAtual;$i++)
    {
         //Porcentagem do salario anterior dobrada, que ja esta na variavel $aumSal recebe na variavel $novosalario.
        $perc= 2 * $perc;
        //a cada ano surge é guardado na variavel $novosalario o valor correspondente desde o ano de 2005 que esta 
        //na variavel $aumSal com o dobro do percentual da variavel $perc a cada ano, ate o ano atual.
        $novosalario=$aumSal+($perc*$aumSal);
       
    }
    //mostro na tela o salario na data atual do sistema
    echo ("O SALARIO NO ANO ATUAL DE:\n") . $anoAtual . "\né\n". number_format($novosalario, 2, ',', '.');
   exit;

   ?>



    
   

   