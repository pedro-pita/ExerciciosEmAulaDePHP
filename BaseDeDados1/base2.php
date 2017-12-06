<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>ADMIN</title>
	</head>
	<body>	
		<h1>Minha Primeira Base de dados Exemplo 2</h1>
	<?
//EXEMPLO2
//Procura Pedro%- apos o string de procura~
//Pedro%- entre o inicio e o final do campo
//%Pedro- no inicio do campo ate ao final

//Cria uma coneção aos servidores
	$conexao = mysqli_connect('localhost','root','','epcc');
	
	//select database existente no servidor referenciado (link,servidor,base de dados)
	mysqli_select_db($conexao,'epcc');
	
	//String com o comando SQL
    $consulta = "SELECT idpessoa,
                nomePessoa FROM idpessoa
                WHERE nomePessoa LIKE 'Pedro%'";
                
    $resultado = mysqli_query($conexao,$consulta);
    echo '<div>';
    while($linha = mysqli_fetch_row($resultado)){
        //retorna o idpessoa
        echo "$linha[0]".':';
        //retorna o nome
        echo "$linha[1]".'</br>';
    }
    echo '</div>';
    
    //Criar uma função que permote processar qlq query parametros (link conexao, query)
    
    function executarQuery($conexao, &$query){
        echo "executarQuery \n Id da Con:".mysqli_get_host_info($conexao).'<br/>';
        echo "<div>Nome<br/ >";
        while($linha = mysqli_fetch_row($query)){
            echo "$linha[0]".':';
            echo "$linha[1]".'<br />';
        }
        echo "</div>";
    }
    //query
    /*$consulta ="SELECT idPessoa, nomePessoa FROM pessoa WHERE nomePessoa LIKE '%Henrique%'";
                //(link conexao, sql)
    $resultado = mysqli_query($conexao, $consulta);
    executarQuery($conexao,$resultado);*/
    
    /*------------------EXEMPLO---------------------*/
   /* $consulta ="SELECT idPessoa, nomePessoa FROM pessoa WHERE nomePessoa LIKE '%Henrique%'";
    $resultado = mysqli_query($conexao, $consulta);
    executarQuery($conexao,$resultado);
    mysqli_connect('localhost','sdfsdf','','epcc') or die('Não foi possivel conetar!!!'.mysql_error());*/
    
    $conn1= mysqli_connect('localhost','zicronof','php','epcc');
    if($conn1){
        die('Não possivel conetar!');
    }
    $consulta ="SELECT idPessoa, nomePessoa FROM pessoa WHERE nomePessoa LIKE '%Henrique%'";
    $resultado = mysqli_query($conn1,$consulta);
    executarQuery($conn1,$resultado);
    
    
?>