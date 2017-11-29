<?php

    //Desafio1.1

    $a = array(1,2,4,6,8,10,12);//Cria um array com os valores (1,2,4,6,8,10,12)
    function valores($a){  //cria uma funчуo com 1 parametro
        $p=$ip=0;//criaчуo de duas variaveis ambas com valor 0
        for ($i = 0; $i < count($a); $i++){ //precorre os indices do array enquanto o $i for menor do que o tamanho do array
            if(($a[$i] % 2) == 0){//Se o numero for divisivel por 2 e resto igual a 0
                $p += $a[$i];//ele soma esse numero a variavel $p
            }
            else //Se nуo for divisivel por 2
                $ip += $a[$i]; //ele soma esse numero a variavel $ip
        }
        $res[0]=$p; //no indice 0 do array $res ele adiciona o valor da variael $p
        $res[1]=$ip; //no indice 1 do array $res ele adiciona o valor da variael $ip
        return $res; //retorna o valor do array $res
    }
    $c = valores($a); //chama a funчуo valores e atribui o retorno р variavel c
    echo $c[0].'-'.$c[1]; // Apresenta o valor do indice 0 do array c, e apresenta o valor do indice 1 do array c
    
    //Neste caso ele ira apresentar "42-1" visto que 2+4+6+8+10+12=42(numeros divisiveis por 2) e 1=1(nuemros nao divisiveis por 2)
    
    //Desafio1.2
    
    $v1="Antes do teste estava assim.";
    function mudanca(&$v1){
        return $v1."Teste de concatenaчуo bem feito";
    }
    echo $v1;
    echo "</br>".mudanca($v1);
?>