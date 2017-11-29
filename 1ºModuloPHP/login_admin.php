<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>PHP FORMULARIOS</title>
	</head>
<?
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
//set cookie sem limite
setcookie("coockieum","php");
setcookie("coockiedois","java");
setcookie("cookietres","c");

//mostrar uma cockie
echo "Coockie dois : ".$_COOKIE["coockiedois"]."</br>";

//mostrar todas as cookies
print_r($_COOKIE);

//setcookie com limite
$nome="Pedro";
setcookie("nome",$nome,time() + (7 * 24 * 60 * 60)); //7 dias * 24 horas * 60 minutos * 60 segundos

?>
<form name="form1" method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
	<input type="text" name="textoP" value="">		
	<input type="submit" name="Submit" value="Login">
	</body>
</html>