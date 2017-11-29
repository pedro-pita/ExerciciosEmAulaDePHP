<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		<meta charset="utf-8">
		<title>Exemplo 2 PHP</title>
			</head>
	<body>
		Content of the document........
	</body>
</html>
<br>

<?php 
    echo"teste";    #isto é um comentario de uma linha
    echo"<br/>";
    echo"teste2";   //isto é um comentário de uma linha
    echo"<br/>";
    echo"teste3";   /*isto é um comentario multilinhas*/
    echo"<br/>";
    
    //Este teste esta errado por causa das aspas que intrepreta como se fosse texto
    $nome="Pedro";
    $teste='---$nome..\n'; //aqui
    echo"$teste";
    echo"<br/>";
    
    //Este teste esta correto
    $nome="Henrique";
    $teste="$nome"; //aqui ja esta correto porque ele adiciona o valor da variavel
    echo"$teste";
    echo"<br/>";
    
    //Criando arrays(vetores)
    $cor[1]="vermelho";
    $cor [2]="preto";
    $cor [3]="verde";
    $cor [4]="laranja";
    $cor["teste"]=1;
    echo"$cor[1]";
    echo"<br/>";
    
    $ar01=array();
    $ar01[]="PHP";
    $ar01[]="MySQL";
    $ar01[]="HTML";
    $ar01[]="CSS";
    $ar02=array(1,2,3,4);
    $ar03=array(0=>0,2=>3,10=>"item10");
    
    for($i=1;$i<count($ar01);$i++){
        echo $ar01[$i]."<br/>";
        }
        
     echo"$ar02[0]";
     echo"$ar02[1]";
     echo"$ar02[2]";
     
    /* $test=array(0,1);
     
     foreach($cor as $test){
         echo $cor[];
     }*/
     
     $pessoa=array(array('n'=>'Sergio','salario'=>856412),array('n'=>'Ana','salario'=>215863));
     for($i=0;$i<count($pessoa);++$i){
         echo $pessoa[$i]['salario'];
     }
?>