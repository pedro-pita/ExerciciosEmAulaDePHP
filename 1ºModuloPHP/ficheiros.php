<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>ADMIN</title>
	</head>
	<body>	
		<h1>Ficheiros</h1>
<?
   /*//mostra o codigo fonte do site
    $lines= file('http://www.google.com/');
    foreach($lines as $line_num => $line){
        echo "Linha #<b>{$line_num}</br>:".htmlspecialchars($line)."<br />\n";
    }*/
    
    /*Outro exemplo, onde obtemos a pagina web inteira como uma string, No qual é interpretado o seu conteudo
    $html=implode('', file('http://www.epcc.pt/'));
    echo '<br />'.$html*/
    
    //Usando o parametro de flags opcionais disponiveis desde o php5
    $trimmed=file('http://www.epcc.pt/', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($trimmed as $line_num => $line){
            echo "Linha #<b>{$line_num}</b> :".htmlspecialchars($line)."<br />\n";
        }
?>
	</body>
</html>