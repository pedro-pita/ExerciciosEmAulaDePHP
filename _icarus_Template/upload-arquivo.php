<?php
//Captura o valor enviado via POST
$arquivo = $_FILES['arquivo'];

/* 
    $_FILES['arquivo']['name']; //captura do arquivo
    $_FILES['arquivo']['type']; //tipo mime do arquivo
    jpeg-> image/jpeg
    png-> image/png
    psd-> image/x-psd
    $_FILES['arquivo']['name']; //tamanho do arquivo em bytes
    $_FILES['arquivo']['tmp_name']; //nome de memoria cache
    $_FILES['arquivo']['error']; //devolve erro caso exista
 */

//Exemplo simples de UPLOAD
/*echo "UPLOAD: ".$_FILES['arquivo']['name']."<br />";
echo "Tipo: ".$_FILES['arquivo']['type']."<br />";
echo "Tamanho: ".$_FILES['arquivo']['size']."<br />";
echo "Path Tempo: ".$_FILES['arquivo']['tmp_name']."<br />";
$dir="img/";//diretorio
$caminho = $dir.$arquivo['name'];
//(nome temporario, caminho)
move_uploaded_file($arquivo['tmp_name'],$caminho);*/

//Exemplo em que aoenas permitimos do tipo JPEG
$dir="img/";//diretorio
if(($arquivo['type'] == "image/jpeg") || ($arquivo['type'] == "image/pjpeg") || ($arquivo['type'] == "image/jpg")){
    if($arquivo['size'] > 5000000){
        exit('Arquivo muito grande!Tamanho maixmo 5Mg'.round($arquivo['size']/1024,3).'KB'."<br />");
    }
    if(!file_exists($dir))
        mkdir($dir,0755);
        echo "UPLOAD: ".$_FILES['arquivo']['name']."<br />";
        echo "Tipo: ".$_FILES['arquivo']['type']."<br />";
        echo "Tamanho: ".$_FILES['arquivo']['size']."<br />";
        echo "Path Tempo: ".$_FILES['arquivo']['tmp_name']."<br />";
        //$caminho = $dir.$arquivo['name'];
        //criar nome dinamico e aleatorio
        $novonome = md5(mt_rand(1,100000).$arquivo['name']);
        $caminho = $dir.$arquivo['name'];
        move_uploaded_file($arquivo['tmp_name'],$caminho);
        echo '<script type="text/javascript">alert(Arquivo enviado para o servidor!!!");</script>';
        echo '<meta http-equiv="refresh" content="1; url=index.html"'; 
}else
        echo "Arquivo invalido, apenas é permitido imagens com extensão .jpg";
?>