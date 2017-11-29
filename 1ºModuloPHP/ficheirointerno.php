<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>ADMIN</title>
	</head>
	<body>	
		<h1>Ficheiros</h1>
<?
    $trimmed=file('algo.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($trimmed as $line_num => $line){
            echo "Linha #<b>{$line_num}</b> :".htmlspecialchars($line)."<br />\n";
        }
        echo '<br /> <br />';
     $trimmed=file('algo.txt');
        foreach ($trimmed as $line_num => $line){
            echo "Linha #<b>{$line_num}</b> :".htmlspecialchars($line)."<br />\n";
        }
?>
	</body>
</html>