Crie uma classe para implementar uma conta corrente. A classe deve
possuir os seguintes atributos: número da conta, nome do correntista e
saldo. Os métodos são os seguintes: alterarNome, depósito e saque; No
construtor, saldo é opcional, com valor default zero e os demais atributos
são obrigatórios.
<?php

class banco{
 
 
 var $nome = ""; // nome do cliente
 var $conta = ""; // numero da conta
 var $valor = ""; // saldo
  
  
 //  metodo construtor cria conta: caso não especifique o valor, o padrão será 0
 function  __construct ($nome,$conta,$valor = 0) {
     
     // seta nome
     $this -> nome = $nome;
     // seta conta
     $this -> conta = $conta;
     // seta valor
     $this -> valor = $valor;
  
 }

 function alterarNome($novonome,$conta,$id){

    // verifica se a conta existe para alterar nome
    if ($this -> conta == $conta) {
        //faço um update na tabela clientes do meu suposto banco com o novo nome digitado na tela de alterar nome via post com a variavel $novonome
        $results=$sql = mysqli_query("UPDATE tb_clientes SET nome = '$novonome' WHERE id='$id'");
        $this->nome=$results;//coloco na variavel nome o resultado da minha query.
}
         
}
  
 // faz depósito através do número da conta
 function deposito($conta, $valor) {
  
     // verifica se a conta existe
     if ($this -> conta == $conta) {
         
         // incrementa o deposito ao saldo
         $this -> valor = $this -> valor + $valor;
         echo "Depósito Efetuado Com Sucesso.";
     
     }
     else
         // conta errada
         echo "Conta Errada";
  
  
 }
  
 // faz saque tendo como parâmetro o numero da conta
 function saque($conta, $valor) {
     
     // verifica se a conta existe
     if ($this -> conta == $conta) {
         // verifica se o saldo é suficiente
         if ($valor > $this -> valor) {  
             
             echo "Saldo Insuficiente.";
         
         }  
         else
         {
             // reduz o valor sacado do saldo
             $this -> valor = $this -> valor - $valor;
             echo "Saque Efetuado Com Sucesso";
         }
     }
     else
         // conta errada
         echo "Conta Errada";
 }
  
  
 // imprime os dados do cliente
 function imprime() {
     
     // nome, conta e saldo
     echo "<br>--------------------------------------------------<br>";
     echo "Nome: ".$this -> nome."<br>";
     echo "Conta: ".$this -> conta."<br>";
     echo "Saldo: ".$this -> valor;
     echo "<br>--------------------------------------------------<br>";
  
  
 }

}
