<?php
    //Forma de incremento sem teste de existencia
    //Nome do ficheiro (item que ser .txt)
    $ficheiro ="count.txt";
    //Abre o arquivo
    $abrir = fopen($ficheiro,"r");
    //Lê o ficheiro
    $total = fread($abrir, filesize($ficheiro));
    //Fecha o ficheiro
    fclose($abrir);
    //Abre o ficheiro
    $abrir = fopen($ficheiro,"w");
    //Soma mais 1 ao resultado de visitas
    $total=$total + 1;
    //Escreve no ficheiro(count.txt) o total de visitassomando +1
    $guardar = fwrite($abrir, $total);
    //Encerra o ficheiro novamente
    fclose($abrir);
    //Mostra o total de visitas no browser
    echo $total;
?>