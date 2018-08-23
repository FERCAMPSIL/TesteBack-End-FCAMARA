
<?php

$areaPintada=$_POST['valor1'];
    //com 1 litro pinto 3 metros quadrados , so tenho galao de 18 litros. logo cada lata pinto 54 metros. faço um if para quantidade 
    //de latas por area pintada e chego na quantidade  de latas
    if($areaPintada%54!=0){
        $qtdLatas=($areaPintada/54) +1;//se meu resultado for diferente de 54 tenho que comprar mais uma lata
    }else{
        $qtdLatas=$areaPintada/54;// se for igual a 54 apenas uma lata
    }

    $precoTotal=$qtdLatas*80;//o preco total é a quantidade de latas vezes o preço dela.

echo 'Você usara '. number_format($qtdLatas, 0) . "\n latas de tinta";//imprimo a quantidade de latas com o number_format para que fique um inteiro de latas
echo'<br>';
echo 'O preco total é de: R$' . number_format($precoTotal, 2, ',', '.'); //imprimo o preço total com number_format para moeda real.




