<!DOCTYPE html>
<html lang="pt-pt">
<head>
<meta charset="utf-8">
<title>Exemplo 2 PHP</title>
</head>
<body>
	<?php
	   //EXEMPLO 1
	   echo "</br>";
	   echo "EXEMPLO 1";
	   echo "</br>";
	   $frutas =array("limao","laranja","banana", "melancia");
	   sort($frutas,SORT_NUMERIC); //serve para escolhermos polo quê queremos ordenar
	   foreach ($frutas as $chave => $valor){
	       echo "frutas[".$chave."] =".$valor."\n";
	   }
	   echo "</br>";
	   echo "</br>";
	   echo "EXEMPLO 2";
	   echo "</br>";
	   $var = '';
	   if(isset($var)){
	       echo  "Essa variavel existe <br />";
	   }
	   $a = "teste"; $b = "outroteste";
	   var_dump(isset($a));
	   var_dump(isset($a,$b));
	   unset($a); //retira valores
	   var_dump(isset($a));
	   var_dump(isset($a,$b));
       
	   //EXEMPLO 3
	   echo "</br>";
	   echo "</br>";
	   echo "EXEMPLO 3";
	   echo "</br>";
	   $transporte=array('carro','carrinho do armando','comboio','avião');
	   echo $modo= current($transporte)."</br>";
	   echo $modo= next($transporte)."</br>";
	   echo $modo= next($transporte)."</br>";
	   echo $modo= prev($transporte)."</br>";
	   echo $modo= end($transporte)."</br>";
	   $modo = current($transporte);
	   
	   /*for($i=0;$i<count($transporte);$i++){
	       echo $modo."</br>";
	       $modo=next($transporte);
	   }*/
	   //EXEMPLO 4
	   echo "</br>";
	   echo "EXEMPLO 4";
	   echo "</br>";
        $ar=array("Mac","NT","WIN","LINUX");
	    if(in_array("WIN",$ar)){
	        echo "Tem Win";
	    }
	    //EXEMPLO 5
	    echo "</br>";
	    echo "</br>";
	    echo "EXEMPLO 4";
	    echo "</br>";
	    
	    //EXEMPLO6
	    $array = array( 0 => 'vermelho',1 => 'azul',2 => 'verde',3 => 'vermelho');
	    $indice=array_search('verde', $array);
	    $indice=array_search('vermelho', $array);
	    
	    $array=array("red","blue","green","blue","blue");
	    print_r(array_keys($array,"blue"));
	?>
	</body>
</html>