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
		   echo "Sess�o: ".session_id();
		   if($_SESSION["permicao"] != "sim"){
		       echo "<br /> N�o tem permiss�o <br />";
		   }else{ 
		       echo "<br /> Tem permiss�o. ".$_SESSION["nome"]."<br />";
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