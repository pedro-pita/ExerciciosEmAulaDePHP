<?php
    /*Verificar se o ficheiro existe
     ./-na mesma raiz
     ../-um nivel a baixo
     ../../ dois nivel a baixo
     na mesma raiz dentro de diretorio
     ./diretorio/algo.txt
     */
$filename='./arquivo/ola.txt';
if(file_exists($filename)){
    echo "O arquivo $filename existe";
}else{
    echo "O arquivo $filename não existe";
}
?>