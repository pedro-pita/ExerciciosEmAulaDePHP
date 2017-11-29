<?
    //Exemplo completo de escrita
    $filename='algo.txt';
    //Usar \n uma vez que queremos quebrar a linha do ficheiro e nao em html
    $conteudo="\n\n\nAcrescentar isso ao arquivo\n";
    if(file_exists($filename)){
        if(is_writable($filename)){
            if(!$handle=fopen($filename,'a')){
                echo "Não foi possivel abrir o arquivo ($filename)";
                exit;
            }
            if(fwrite($handle, $conteudo)==FALSE){
                echo "Não foi possivel escrever no arquivo ($filename)";
                exit;}
            echo "Sucesso: Escrito ($conteudo) no arquivo ($filename)";
            fclose($handle);
        }else{
            echo "O arquivo $filename não pode ser alterado";
        }
    }
?>