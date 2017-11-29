<?php
/*$filename='https://pt.lipsum.com/feed/html';
if(!$handle=file_get_contents($filename)){
    echo "Não fui possivel o arquivo ($filename)";
    exit;}
    echo $handle;
    fclose ($handle);*/ 
/*$filename='./arquivo/gif.gif';
if(!$handle=fopen($filename,'rb')){
    echo "Não fui possivel o arquivo ($filename)";
    exit;}
    echo $handle;
    fclose ($handle);*/
    
    //Exemplo completo de leitura
   $filename='..arquivo/algo.gif';
   if(file_exits($filename)){
       echo "O arquivo $filename existe";
       //$filename="c::\\files\\figura.gif";
       /*Abre apenas para leitura ; Coloca o ponteiro do arquivo no inicio do arquivo. 'b' para forçar o modo binario */
       $handle=fopen($filename, "rb");
       echo filesize($filename);
       $conteudo=fread($handle,filesize($filename));
       echo $conteudo;
       fclose($handle);
   }else{
       echo "O arquivo $filename não existe";
   }
?>