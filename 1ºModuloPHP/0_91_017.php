<!DOCTYPE html>
<html lang="pt-pt">
<head>
<meta charset="utf-8">
<title>Exemplo 2 PHP</title>
</head>
<body>
	<?php
	//EXEMPLO1
        $A = 15; // A é integer (15)
            echo $A;
            echo gettype($A);
            echo "<br/>";  
        $A = (double) $A; // A passa a ser double (15.0)
            echo $A;
            echo gettype($A);
            echo "<br/>";
        $A = 3.9; // A deixa de ser igual a 15.0 e passa a ter o valor de 3.9
            echo $A;
            echo gettype($A);
            echo "<br/>";
        $A = (int) $A; // A passa a ser integer (3)
            echo $A;
            echo gettype($A);
            echo "<br/>";
            
        echo "Exemplo 2 <br/>";
       
        //EXEMPLO2
        $B = 12;
            settype($B, double);
            echo $B;
            echo gettype($B);
            echo "<br/>";
            
            // phpinfo();
            
        define("PI",3.1456); // criar uma constante
        $raio=4;
        $circunferencia=2*PI*$raio; //usar uma constante
        echo $circunferencia;
        echo "<br/>";
        
        //EXEMPLO 3
            $nome ='Pedro';
            $ref=&$nome;//o & faz com que a variavel ref aponte para o mesmo lugar da memoria do nome sem o & o ref fica com o valor do nome
            //$ref="$ref";
            echo $nome; //Pedro
            echo $ref; //Pedro
            
            $nome="Henrique";
            echo $nome;
            echo $ref;
            echo "<br/>";
     
        //EXEMPLO4 Atribuição
        
            $c=5;
            $c +=2;
            echo $c;
            echo "<br/>";
            //==
            $d=5;
            $d=$d+2;
            echo $d;
            echo "<br/>";
        
            //EXEMPLO 05 (Esta errado)
            
            $vermelho=14696465 >> 16;
            echo $vermelho;
            
            $verde=(14696465) >> 8;
            echo $verde;
            
            $azul=(14696465) >> 24;
            echo $azul;
         
        ?>
	</body>
</html>