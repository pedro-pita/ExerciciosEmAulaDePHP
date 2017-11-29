<?php
$conexao = mysqli_connect('localhost', 'php', 'php', 'epcc');
$consulta = 'SELECT idPessoa, nomePessoa FROM pessoa WHERE idPessoa=1';
$resultado = query($conexao, $consulta);
if($resultado == true){
    if ($resultado = mysqli_query($conexao, $consulta)) {
        echo "QT: " . mysqli_num_rows($resultado);
        echo "<div>Nome<br />";
        while ($linha = mysqli_fetch_row($resultado)) {
            echo "$linha[0]" . ':';
            echo "$linha[1]" . "<br />";
        }
        echo "<div/>";
    } else {
        echo "Não foi possivel fazer a query.";
    }
}
function query($conexao, $query){
    $consulta = explode(' ', $query);
    if(in_array("WHERE", $consulta))
        return true;
        else
            return false;
}
?>