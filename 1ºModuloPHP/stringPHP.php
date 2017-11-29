<?php
    //EXEMPLO1
    echo "Exemplo1"."</br>";
    
    $pizza="peca1 peca2 peca3"; //o espaço entre as aspas é o delimitador e indica onde tem de ser separado
    $peca = explode(" ",$pizza); //o espaço entre as aspas é o delimitador e indica onde tem de ser separado
    echo $peca[0]."</br>";
    echo $peca[1]."</br>";
    echo $peca[2]."</br>"."</br>";
    
    //EXEMPLO2
    echo "Exemplo2"."</br>";
    $data = "cab:*:1023:1000::/home/cab:/bin/sh";
    echo $data."</br>";
    
    $dataParte = explode(":", $data);
    list($va1,$var2,$va3,$var4,$va5,$var6,$va7) = $dataParte;
    
    echo $dataParte[0]."</br>";
    echo $dataParte[1]."</br>";
    echo $dataParte[3]."</br>";
    echo $dataParte[4]."</br>";
    echo $dataParte[5]."</br>";
    echo $dataParte[6]."</br>";
    echo $dataParte[7]."</br>";
    echo "</br>"."</br>";
    
    echo "Exemplo3"."</br>";
    $array = array('nome', 'email', 'telefone');
    $separacaovirgula = implode(", ",$array);
    echo $separacaovirgula."</br>"."</br>";
    
    $str='Pedro';
    if(md5($str) === '38e2b2e31c0fce9537f735dda9fdf10a') //com tres iguais ele verifica o conteudo e para alem disso se é do mesmo tipo de dados
        echo "Código = Pedro"."</br>";
    else
        echo "Não é esta password"."</br>";
    
    echo gettype($str)."</br>";
    echo gettype(md5($str))."</br>";
    
    if(1==='1'){
        echo "São do mesmo tipo";
    }
    if(1=='1'){
        echo "Não sao do mesmo tipo mas têm valor igual";
    }
    
    echo "Exemplo4"."</br>";
    
    $desce ="\n"; //Temos de ver a tabela de carateres
    if(ord($desce)==10)
            echo "O Primeiro caratere de \$desce é uma nova linha.\n";
    //Falta aqui a parte em que damos o carater e ele mostra. 30.10.2017
    
    echo "Exemplo5"."</br>";
    
    $var1="Sergio";
    $var2="Sergio";
    if(strcasecmp($var1,$var2)==0){
        echo '$var1 é igual a $var2 numa comparacao sem diferenciar maiusculas e minusculas';
    }
    
    echo "Exemplo6"."</br>"."</br>";
    
    $email = 'USER@EXAMPLE.pt';
    echo stristr($email,'e'); //saida ER@EXAMPLE.pt, ele é falso de padrao e entao mostra o que esta a frente do E
    echo stristr($email,'e',true); //Mostra US, se for true mostra o que ta atras do E
    
    //"EXEMPLO7"
    echo "</br>"."Exemplo7"."</br>"."</br>";
    function devolvenome($teste, $tipoDefeito){
        return stristr($teste,"@",true);
    }
        $email=array("al216045@epcc.pt","al216048@epcc.pt","al216047@epcc.pt","al216046@epcc.pt");
        for($i=0; $i!=count($email);$i++){
          echo devolvenome($email[$i],true)."</br>"."</br>";
      }
        
?>