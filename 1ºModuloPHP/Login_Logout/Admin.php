<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>ADMIN</title>
	</head>
	<body>	
		<h1>Admin</h1>
<?
		session_start();
		if(isset($_SESSION["nome"],$_SESSION["permicao"])){
		   echo "Sessão: ".session_id();
		   if($_SESSION["permicao"] != "sim"){
		       echo "<br /> Não tem permissão <br />";
		   }else{ 
		       echo "<br /> Tem permissão. ".$_SESSION["nome"]."<br />";
		   }
		   if(isset($_POST["Submit"])){
		       header("Location: Logout.php");
		   }
		}
?>
	<form name="form1" method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="textoP" value="">
		<input type="submit" name="Submit" value="Logout">
	</body>
</html>