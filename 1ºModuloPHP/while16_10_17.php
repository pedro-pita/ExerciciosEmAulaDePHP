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
    
    $i=0;
    while($i<=10){
        print $i++;
    }
    echo "<br/>";
    echo "<br/>";
    
    $z=11;
    
    //Exemplo 2
    echo "EXEMPLO2";
    echo "<br/>";
    while($z++ > 10){ //x esta a ser incrementado no inicio mas tambem pode ser no final
        if($z == 20){
            echo "<br/>";
            echo "Salta Fora! z=20";
            break;
        }
        echo "$z";
    }
    echo "<br/>";
    echo "<br/>";
    
    //Exemplo 3
    echo "EXEMPLO3";
    echo "<br/>";
    
    for($s=1;$s<10;$s++){
        echo $s."<br/>";
    }
    echo "<br/>";
    echo "EXEMPLO 3.1";
    echo "<br/>";
    for($s=1;  ;$s++){
        if($s>10)
            break;
        echo $s."<br/>";
    }
    echo "<br/>";
    
    //Exemplo 4
    echo "EXEMPLO4";
    echo "<br/>";
    for($i=1, $j=0;
        $i <=10;
            $j+=$i,
            print "i->".$i."\tj->".$j."<br/>",
            $i++)
        echo "<br>";
            
    //Exemplo 5
    echo "<br>";
    echo "EXEMPLO 5";
    echo "<br>";
    //mostra conteudo do array
    $arr =array(1,2,3,4);
    foreach ($arr as $value){
        echo $value;
    }
    
    echo "<br>";
    echo "<br>";
    //Exemplo 5.1
    echo "EXEMPLO 5.1";
    echo "<br/>";
    
    $arr1 =array(1,2,3,4);
    foreach ($arr1 as &$value){
        $value=$value*2;
    }
    print_r($arr1); //imprime todos os valores do array na sua incensia
    
    echo "<br>";
    echo "<br>";
    //Exemplo 5.2
    echo "EXEMPLO 5.2"; //Mostra a chave e o valor
    echo "<br/>";
    $arr3=array(1,2,3,4);
    foreach ($arr3 as $chave => $value){
        echo "CH: $chave V1: $value <br/>";
    }
    echo "<br>";
    echo "<br>";
    
    //Exemplo6 aray multidimensionais
    echo "EXEMPLO 6";
    echo "<br>";
    $a =array();
    $a[0][0]="a";
    $a[0][1]="b";
    $a[1][0]="c";
    $a[1][1]="d";
    $a[1][2]="e";
    foreach ($a as $linha)
        foreach ($linha as $coluna)
            echo $coluna."<br/>";
 ?>
	</body>
</html>