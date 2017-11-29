<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>ADMIN</title>
	</head>
	<body>
		<h1>Minha Primeira Base de dados Exemplo 1</h1>
	<?
	//Cria uma coneção aos servidores
    $conexao = mysqli_connect('localhost','root','','epcc');
    
    //select database existente no servidor referenciado (link,servidor,base de dados)
    mysqli_select_db($conexao,'epcc');
    
    //String com o comando SQL
    $consulta = 'SELECT idpessoa, nomePessoa FROM idpessoa';
    
    /*é atribuido a variavel, o resultado do identificador da execução da query*/
    //link servidor, consulta sql
    if($resultado = mysqli_query($conexao, $consulta)){
        //indicar a qt quantidade
        echo "Quantidade: ".mysqli_num_rows($resultado);
        echo "<div>Nome: </br/>";
        //rotina que cada dado retorna da BD sera atribuidp a variavel linha
        //endereç do resultado
        while($linha = mysqli_fetch_row($resultado)){
            //retorna o idpessoa
            echo "$linha[0]".':';
            //retorna o nome
            echo "$linha[1]".'</br>';
        }
        echo '</div';
    }else
        echo "O resultado é vazio.";
    //mostra o valor da identificação da conexao
    echo "Id da Con:".mysqli_get_host_info($conexao).'<br/>';
    echo "Servidor SQL:".mysqli_get_server_info($conexao).'<br/>'
    ?>
	</body>
</html>