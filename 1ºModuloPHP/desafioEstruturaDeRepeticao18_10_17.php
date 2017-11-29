<!DOCTYPE html>
<html lang="pt-pt">
    <head>
    <meta charset="utf-8">
    <title>Exemplo 2 PHP</title>
</head>
	<body>
<?php
    $a =array();
    $a[0][0]="a";
    $a[0][1]="b";
    $a[1][0]="c";
    $a[1][1]="d";
    
    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($a[$i]);$j++){
            echo $a[$i][$j]."<br/>";
        }
    }
?>
	</body>
</html>
