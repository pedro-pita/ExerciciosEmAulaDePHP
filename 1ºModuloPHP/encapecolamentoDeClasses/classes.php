<?php
//Exemplo de encapeçulamento ~
class Pessoa{
    //var apenas acedida pela propria classe
    public $id;
    //var acedida peça propria classe e subclasse
    protected $nome;
    //iniciar var id
    public function setId($id){
        $this->id=$id;
    }
    public function setNome($nome_param){
        $this->nome = $nome_param;
    }
    //Getters
    public function getNome(){
        return $this->nome;
    }
    public function getId(){
        return $this->id;
    }
}//Fechar a classe Pessoa
//Herança
class PessoaFisica extends Pessoa{
    public function setId($id){
        $this->id=$id;
    }
    public function setNome($nome_param){
        $this->nome = $nome_param;
    }
}//Fechar a classe PessoaFisica

/*--------------------MAIN----------------*/
$pessoa = new Pessoa();
$pessoaFisica = new PessoaFisica();
/*Fatal Error: esta propriedade é privada*/
//pessoa->=12;
//$pessoaFisica->id=25;
$pessoa->setId(12);
$pessoaFisica->setId(25);//Sucesso!!! uma vez que o metodo é 'publico'
echo "<br />".$pessoa->getId();
echo "<br />".$pessoaFisica->getId();

//$pessoaFisica->nome ="Pedro Pita";
$pessoaFisica->setNome("Pedro Pita");

class Veiculo{
    public $andar;
    protected $qtRodas;
    public function andar(){
        echo "O veiculo esta a andar.<br />";
    }
    public function porGas(){
        echo "<br />O veiculo esta abastecido.<br />";
    }
    public function meterMudanca(){
        echo "O veiculo mudou de mudança.<br />";
    }
    public function setAndar($andar){
        return $this->andar;
    }
    public function setQtRodas($qtRodas){
        $this->qtRodas = $qtRodas;
    }
    public function getQtRodas(){
        return $this->qtRodas=4;
    }
}
class Carro extends Veiculo{
    public function __construct(){
    $this->qtRodas=4;
    //ou
    //$this->setQtRodas(4);
    }
}//Fechar classe carro
/*----------------------------------MAIN-----------------------------*/
$carro= new Carro();
$carro->porGas();
$carro->andar();
$carro->meterMudanca();
echo $carro->getQtRodas();
echo "<br /><br />";

class CarroComum{
    protected $valor;
    public function setValor($valor_param){
        $this->valor = $valor_param;
    }
    public function getValor(){
        return $this->valor;
    }
    public function calcularImposto(){
        return $this->valor*1.23;//23% de imposto
    }   
}
class CarroLuxo extends CarroComum{
    public function calcularImposto(){
        return $this->valor*1.56;//56% de imposto
    }
}
/*---------------------MAIN----------------*/
    $carroC = new CarroComum();
    $carroC->setValor(100);
    echo $carroC->calcularImposto();
    echo '<br />';
    $carroL = new CarroLuxo();
    $carroL->setValor(100000);
    echo $carroL->calcularImposto();
    echo "<br /><br /><br />";
    
class Agenda{
    private $evento;
    private $data;
    private $descricao;
    
    public function setEvento($evento_param){
        $this->evento=$evento_param;
    }
    public function getEvento(){
        return $this->evento;
    }
    public function setData($data_param){
        $this->data=$data_param;
    }
    public function getData(){
        return $this->data;
    }
    public function setDescricao($descricao_param){
        $this->data=$descricao_param;
    }
    public function getDescricao(){
        return $this->descricao;
    }
}
/*--------------------MAIN----------------*/
$agenda = new Agenda();
$agenda->setEvento("Festa de finalistas de 2º Programador");
$agenda->setData("14/12/2019");
$agenda->getDescricao("A festa mais esperada do ano!!!");
print_r($agenda); //para nao termos de fazer echo
?>