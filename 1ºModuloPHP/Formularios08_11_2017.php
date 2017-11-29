<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>PHP FORMULARIOS</title>
	</head>
	<body>
	
	<?  
	   //var array $_POST capturar os valores contidos no array
	   //verificar se o POST submit
	   //verificar se tem algum valor
	   if(isset($_POST["Submit"]))
	       if(isset($_POST["textoP"]))
	           if($_POST["textoP"] != ""){
	               echo $_POST["textoP"]."</br>";
	           }	               
	               
//versão do browser HTTP_USER_AGENT
echo $_SERVER['HTTP_USER_AGENT']."\n<br />";
//porta do servidor SERVER_PORT
echo $_SERVER['SERVER_PORT']."\n<br />";
//metodo de envio REQUEST_METHOD
echo $_SERVER['REQUEST_METHOD']."\n<br />";
//a precorrer a pagina PHP_SELF
echo $_SERVER['PHP_SELF']."\n<br />";
//devolve a raiz do servidor HTTP_HOST
echo $_SERVER['HTTP_HOST']."\n<br />";

//devolve o tempo para 1 semana e 7 dias
//dias x horas do dia x minutos de uma hora x seg de um minuto
echo $proxSmn = time() + (7 * 24 * 60 * 60); //7 dias * 24 horas * 60 minutos * 60 segundos
//ou echo $proSmn;
echo "<br/>";
echo "Data: ".date('d-m-Y')."\n</br>"; //ou podemos variar o d m y conforme queremos apresentar
//mostrar quando é a semana seguinte
echo "Data da Semana Seguinte: ".date('d-m-Y',$proxSmn)."\n</br>";

//hora do sistema
$hora = date("H:i:s");
echo "Hora do Sistema: ".$hora;

//pagina de redirecionamento
function redireciona(){
    $host = $_SERVER['HTTP_HOST'];
    //rtrim limpa todo o conteudo do diretorio do parametro 
    $uri = rtrim(dirname($_SERVER['PHP_SELF'])."/\\");
    $extra = "admin.php";
    header("Location: http://$host$uri/$extra");
}
//testar o clique no btn submit
if(isset($_POST["Submit"])){
    redireciona();
}
    ?>
		<form name="form1" method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
			<input type="text" name="textoP" value="">
			<input type="submit" name="Submit" value="Login">
	</body>
</html>