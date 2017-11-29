<!DOCTYPE html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Exemplo 2 PHP</title>
</head>
	<body>
<?php
    //EXEMPLO1
    echo "EXEMPLO 1";
    echo "</br>";
    function teste1(){
        static $a=0; //valor é recrocivo
        echo $a;
        $a++;
    }
    teste1();
    
    echo "</br>";
    echo "</br>";
    //EXEMPLO 2
    echo "EXEMPLO 2";
    echo "</br>";
    function teste2(){
        static $a = 0;
        echo $a;
        if($a < 10){
            $a++;
            teste2();
        }
    }
    teste2();
    
    echo "</br>";
    echo "</br>";
    
    //EXEMPLO 3
    echo "EXEMPLO 3";
    echo "</br>";
    
    $url = "http://localhost/teste.php3?teste=teste";
    echo urlencode($url);
    echo "</br>";
    $urldecode = "http%3A%2F%2Flocalhost%2Fteste.php3%3Fteste%3Dteste";
    echo urldecode($urldecode);
    
    echo "</br>";
    echo "</br>";
    
    //EXEMPLO 4
    echo "EXEMPLO 4";
    echo "</br>";
    
    $b="ola";
    echo gettype($b); //retorna String, função responsavel por retornar o tipo
    $c= gettype($b);
    if($c =="string")
        echo "</br> Tipo Igual.";
    echo "->".is_string($b);
    var_dump(is_string($b));
    
    echo "</br>";
    echo "</br>";
    
    $d=0.2;
    switch(gettype($d)){
        case 'integer':
           echo "Integer";break;
        case 'string':
            echo "string";break;
        case 'double':
            echo "double";break;
        case 'array':
            echo "array";break;
        case 'object':
            echo "object";break;
    }
    //EXEMPLO 5
    
    
?>
</body>
</html>