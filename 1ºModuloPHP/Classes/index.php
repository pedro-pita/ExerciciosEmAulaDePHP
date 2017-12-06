<?php
//incluir a classe Carro via ficheiros e na mesma raiz
include 'classeCarro.php'; //importa a classe
//criação de uma intancia da classe Carro
$um_carro= new Carro();
//criação de uma intancia da classe Carro
$dois_carro= new Carro();
//criação de uma intancia da classe Carro
$tres_carro= new Carro();

//chamar a função setAtributos, para atribuir ao objeto $um_carro
$um_carro->setAtributos("Mercedes", "AMG", "azul");
$dois_carro->setAtributos("Audi", "A6", "vermelho");
$tres_carro->setAtributos("Peugeot", "308", "preto");

//Exibir uma alinha de separação
echo '<hr />'; //linha html de uma ponta a outra cinzenta com 1 px
echo '<p>'; //paragrafo
//Exibir a marca do carro, add quebra de linha <br />
echo '<b>Carro: </b>'.$um_carro->getMarca().'<br />';
echo '<b>Modelo: </b>'.$um_carro->getModelo().'<br />';
echo '<b>Cor: </b>'.$um_carro->getCor().'<br />';
echo '</p>';

//Exibir uma alinha de separação
echo '<hr />'; //linha html de uma ponta a outra cinzenta com 1 px
echo '<p>'; //paragrafo
//Exibir a marca do carro, add quebra de linha <br />
echo '<b>Carro: </b>'.$dois_carro->getMarca().'<br />';
echo '<b>Modelo: </b>'.$dois_carro->getModelo().'<br />';
echo '<b>Cor: </b>'.$dois_carro->getCor().'<br />';
echo '</p>';

//Exibir uma alinha de separação
echo '<hr />'; //linha html de uma ponta a outra cinzenta com 1 px
echo '<p>'; //paragrafo
//Exibir a marca do carro, add quebra de linha <br />
echo '<b>Carro: </b>'.$tres_carro->getMarca().'<br />';
echo '<b>Modelo: </b>'.$tres_carro->getModelo().'<br />';
echo '<b>Cor: </b>'.$tres_carro->getCor().'<br />';
echo '</p>';

//Função de criação dinamica
function criarCarro($marca_p, $modelo_p, $cor_p){
    $carro = new Carro();
    $carro->setAtributos($marca_p, $modelo_p, $cor_p);
    return $carro;
}

$i = 0;
$listaCarros = array();
$listaCarros[$i++] = criarCarro("Mercedes", "Amg", "Azul");
$listaCarros[$i++] = criarCarro("Audi", "A6", "vermelho");
$listaCarros[$i++] = criarCarro("Peugeot", "308", "preto");
$listaCarros[$i++] = criarCarro("Ford", "Fiesta", "Amarelo");

?>