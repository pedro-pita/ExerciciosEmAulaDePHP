<!DOCTYPE html>
<html lang="pt-pt">
<head>
<meta charset="utf-8">
<title>Exemplo 2 PHP</title>
</head>
<body>
<?php
    $n1=1;
    $n2=2; 
    
    echo ($n1>=$n2)?("n1 é maior"):("n2 é maior"); //Se o $n1 for maior ou igual ele diz "n1 é maior" se nao for "n2 é maior"
    
    echo "<br/>";
    
    $nMaior;
    ($n1>=$n2)?($nMaior=$n1):($nMaior=$n2); //Se o $n1 for maior ele guarda o valor de $n1 na variavel nmaior, se nao for ele guarda o valor de $n2
    echo $nMaior. " Este numero é o maior"; //mostra o valor do maior e para alem disso mostra a mensagem "Este numero é o maior"
    
    $a = $b =10;//a e b ficam com o valor 10
    $c=$a++; //c fica com o valor 10 e o a incrementa +1 depois de fazer a conta, ou seja, fica igual a 11
    $d=--$a; //ele decrementa -1 ao a antes de executar a conta ou seja o valor de d vai ser $a - 1;
    
    $a++;//adiciona +1 ao $a     
    //ou
    $a+=1;
    //ou
    $a=$a+1;
     
?>
</body>
</html>