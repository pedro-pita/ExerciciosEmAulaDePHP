<!DOCTYPE html>
<html lang="pt-pt">
<head>
<meta charset="utf-8">
<title>Exemplo 2 PHP</title>
</head>
<body>
<?php
    
    //Exemplo 1
    echo "EXEMPLO1";
    echo "<br/>";
    $a=1;
    $b=2;
    $maior;       
    if($a>$b)
        $maior=$a;
        else
            $maior=$b;           
            echo "Maior: ".$maior;
            echo "<br/>";
            
            //Exemplo 2
            echo "<br/>";
            echo "EXEMPLO2";
            echo "<br/>";
            $c=5;
            $d=6;
            $maior;
            $menor;
            
            if($c>$d){
                $maior=$c;
                $menor=$d;
            }else{
                $maior=$d;
                $menor=$c;
            }
            echo "Maior:".$maior;
            echo " Menor:".$menor;
            echo "<br/>";
            //exemplo 3
           /* if($c>$d)//isto da erro porque o $maior=$c esta a espera do else por isso nao podemos ter duas instruções
                $maior=$c;//unico que pertence ao if, é como se tivesse uma }
                $menor=$d; //executa sempre porque esta fora do if
               else
                $maior=$d;//unico que pertence ao if, é como se tivesse uma }
                $menor=$c;//executa sempre porque esta fora do if
            */
             //exemplo 4
               echo "<br/>";
               echo "EXEMPLO4(if)";
               echo "<br/>";
             //em if
           
             $i=2;
               
             if($i==0){
                 echo "i=0";
             }elseif ($i==1){
                 echo "i==1";
             }elseif ($i==2){
                 echo "i==2";
             }
             echo "<br/>";
             echo "<br/>";
             echo "EXEMPLO4(switch)";
             echo "<br/>";
             //em switch
             $z=1;
             switch ($z){
               case 0:
                 echo "z=0";
                 break;
               case 1:
                echo "z==1";
                break;
               case 2:
                echo "z==2";
                break;
             }
             
             echo "<br/>";
             echo "<br/>";
             //exemplo 5
             echo "EXEMPLO5";
             ECHO "<br/>";
             $nota=3;
             switch ($nota){
                 case 0:
                 case 1:
                 case 2:
                     echo "Reprovado";
                     break;
                 case 3:
                 case 4:
                 case 5:
                     echo "Aprovado";
                     break;
             }           
?>
</body>
</html>