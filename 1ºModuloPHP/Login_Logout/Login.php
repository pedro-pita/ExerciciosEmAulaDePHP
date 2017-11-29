<!DOCTYPE HTML>
<html lamp="pt-pt">
	<head>
		<title>LOGIN</title>
	</head>
	<h1>LOGIN</h1>
<?
if (isset($_POST["Submit"])) {
    session_start();
    $teste = session_id();
    if (isset($teste)) {
        echo $teste."</br>";
        $_SESSION["nome"] = "Pedro";
        $_SESSION["permicao"] = "sim";
        $cookie_name = session_name();
        echo "Nome da Cookie: ".$cookie_name."</br>";
    }
    if($_SESSION["permicao"] != "sim")
        echo "<br /> Não tem permissão <br />";
   else
        echo "Tem permissão";
        header("Location: Admin.php");
}

?>
<form name="form1" method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="textoP" value="">
		<input type="submit" name="Submit" value="Login">
	</body>
</html>