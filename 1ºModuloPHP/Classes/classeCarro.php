<?php
class Carro{
    //aqui declaramos o atributo privado _marca
    private $_marca;
    //aqui declaramos o atributo privado _$_modelo
    private $_modelo;
    //aqui declaramos o atributo privado _cor
    private $_cor;
        
    /*função publica de contrutor, é executada no momento de criação do objeto é executada no momento da criação do objeto */
    public function __construct(){
        echo 'Fui instanciado, logo que o objeto foi criado<br />';
        /*O $this é usado para referenciar o proprio objeto, ou seja
        * $this->marca por exemplo, estariamos a aceder ao atributo da classe carro */
        $this->setAtributos(null,null,null);
    }
    public function __destruct(){
        echo '<br />Objeto foi destruido.';
    }
    public function setAtributos($marca_p,$modelo_p,$cor_p){
        //Atributo que 'seta' a marca com o parametro recebido $marca_p
        $this->_marca = $marca_p;
        //Atributo que 'seta' o modelo com o parametro recebido $modelo_p
        $this->_modelo=$modelo_p;
        //Atributo que 'seta' a cor com o parametro recebido $cor_p
        $this->_cor=$cor_p;
    }
    public function getMarca(){
        return $this->_marca;
    }
    public function setMarca($marca_p){
        $this->_marca=$marca_p;
    }
    public function getModelo(){
        return $this->_modelo;
    }
    public function setModelo($modelo_p){
        $this->_modelo=$modelo_p;
    }
    public function getCor(){
        return $this->_cor;
    }
    public function setCor($cor_p){
        $this->_cor=$cor_p;
    }
}
?>