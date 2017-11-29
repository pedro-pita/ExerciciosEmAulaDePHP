<!DOCTYPE html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Exemplo 2 PHP</title>
</head>
	<body>
<?php
  //Exmplo 1
  echo "EXEMPLO 1"."<br/>";
  function imprimeTexto($txt){
      echo $txt;
  }
  imprimeTexto("teste de funcoes"); //chamar função
  
  //EXEMPLO 2
  echo "<br/>"."<br/>"."EXEMPLO 1"."<br/>";
  function soma($n){ //não da nada visto que nao chamei a função
      $n+=10;
  }
    $a=3;
    soma($a);  
    echo $a; //vai apresentar 3 visto que nao chameia  função
  
  //EXEMPLO3
  echo "<br/>"."<br/>"."EXEMPLO 3";
  function soma2(&$num1, $num2){
      $num1 +=10;
      $num2 +=10;
  }
  $a=$b=1;
  soma2($a,$b);
  echo "<br/>".$a."<br/>".$b;
  
  //EXEMPLO4
  echo "<br/>"."<br/>"."EXEMPLO 4";
    
  //EXEMPLO5
  function teste ($n ='Sergio',$idade=30){
      echo "<br/>"."O nome e ".$n.", de idade".$idade;
  }
  teste();

  //EXEMPLO6
  echo "</br>";
  echo "</br>";
  echo "EXEMPLO 6";
  echo "</br>";
  $func =function($n)
  {
      echo "Ola $n ";      
  };
  $func('World');
  $func(' PHP');
  
  //EXEMPLO7
  echo "</br>";
  echo "</br>";
  echo "EXEMPLO 7";
  echo "</br>";
  $a="Teste";
  function Teste2(){
     global $a;
     echo $a;
  }
    Teste2();
    
    //EXEMPLO8
    echo "</br>";
    echo "</br>";
    echo "EXEMPLO 8";
    echo "</br>";
    $b="Ola";
    function Teste3(){
        global $b;
        echo $GLOBALS["b"];
        echo $b;
    }
    Teste3();
    
    //EXEMPLO9
    echo "</br>";
    echo "</br>";
    echo "EXEMPLO 9";
    echo "</br>";
    function pai(){
        function fiho(){
            echo "Eu sou o filho.";
    }
        echo "Eu sou o pai.";
    }
    pai();
    
    //EXEMPLO10
    echo "</br>";
    echo "</br>";
    echo "EXEMPLO 10";
    echo "</br>";
    
    function calc($v1,$v2){
        return $v1+$v2;
    }
    $resultado = calc(5,6);
    echo "$resultado";
    
    
    //EXEMPLO11
    echo "</br>";
    echo "</br>";
    echo "EXEMPLO 11";
    echo "</br>";
    
    $info=array('Pedro','18','Canhas');
    //Listar todas as variaveis
    list($nome,$idade,$morada) = $info;
    echo "O $nome tem $idade e mora nos $morada. \n";
  ?>
	</body>
</html>
