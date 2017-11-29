<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>LOGOUT</title>
	</head>
	<body>	
		<h1>Logout</h1>
<?
	session_start();
	if(isset($_SESSION["Nome"],$_SESSION["premite"])){
	    if(session_destroy()){
	    session_write_close(); //Fecha tudo nesta sessão
	    setcookie($cookie_name,time()); //time() faz com que a variavel deixe de estar ativa no momento
	    header("Location: Login.php");
	   }
	}
?>

	</body>
</html>