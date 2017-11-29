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

$pessoaFisica->nome ="Pedro Pita";
$pessoaFisica->setNome("Pedro Pita");

class Veiculo{
    public $andar;
    protected $qtRodas;
    public function andar(){
        echo "O veixulo esta a andar";
    }
    public function porGas(){
        echo "O veixulo esta abastecido";
    }
    public function meterMudanca(){
        echo "O veiculo esta a andar";
    }
    public function setAndar(){
        echo "O veiculo mudou de mudança";
    }
    public function setQtRodas($qtRodas){
        $this->qtRodas = $qtRodas;
    }
    public function getQtRodas($qtRodas){
        return $this->qtRodas;
    }
}
class Carro extends Veiculo{
    public function __construct(){
    $this->qtRodas=4;
    //ou
    //$this->setQtRodas(4);
    }
}
/*----------------------------------MAIN-----------------------------*/
$carro= new Carro();
$carro->porGas();
$carro->andar();
$carro->meterMudanca();
?>