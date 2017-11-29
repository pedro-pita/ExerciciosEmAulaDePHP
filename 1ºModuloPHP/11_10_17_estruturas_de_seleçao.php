<!DOCTYPE html>
<html lang="pt-pt">
<head>
<meta charset="utf-8">
<title>Exemplo 2 PHP</title>
</head>
<body>
    <?php
        //Exemplo1        
        $a=1;
        $b=2;
        $maior;
        
        if($a>$b)
            $maior=$a;
        else 
            $maior=$b;
        
        echo $maior;
        
        //Exemplo2
        $c=1;
        $d=2;
        $maior;
        $menor;
        
        if($c>$d){
            $maior=$c;
            $menor=$d;
        }else{
            $maior=$d;
            $menor=$c;
        }
        echo $maior;
        ?>
</body>
</html>