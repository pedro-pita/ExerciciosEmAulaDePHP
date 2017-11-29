<?
$filename = './contagem.txt';
$modo = 'w+'
    $handle=fopen($filename,$modo);
    
    atualizaContagem($filename,$modo) {
        if(file_exists($filename)) {
            echo "O arquivo $filename existe";
            if(is_writable($filename)) {
                if(!$handle=fopen($filename, 'a')) {
                    echo "Nao foi possivel abrir o arquivo ($filename)";
                    exit;
                }
                $handle = fopen($filename, 'r');
                $total = fread($handle, filesize($filename));
                fclose($abrir);
                $handle = fopen($filename, 'w');
                $total = $total +1;
                if(fwrite($handle, $total) === FALSE) {
                    echo "Nao foi possivel escrever no arquivo ($filename)";
                    exit;
                }
                echo "Sucesso: Escrito ($conteudo) no arquivo ($filename)";
                fclose($handle);
                echo $total;
            }  else {
                echo "O arquivo $filename nao pode ser alterado";
            }
        } else {
            echo "O arquivo $filename nao existe";
        }
    }
    ?>