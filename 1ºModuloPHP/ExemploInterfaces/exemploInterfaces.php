<?
//criação de interface
interface ContaBancaria{ //quem quiser usar esta interface tem de usar a minha estrutura!
    public function retirar($valor);
    public function depositar($valor);
}

final class ContaPoupanca implements ContaBancaria{
    private $valor;
    public function __construct(){
        $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }
    public function getValor(){
        return $this->valor;
    }
    public function retirar($valor){
        $this->valor -= $valor;
    }
    public function depositar($valor){
        $this->valor += $valor;
    }
}
$contaPedro = new ContaPoupanca();
$contaAna = new ContaPoupanca();
$contaPedro->setValor(1000000);
$contaAna->setValor(200000);
echo 'Saldo Pedro: '.$contaPedro->getValor().'&euro;<br />';
echo 'Saldo Ana: '.$contaAna->getValor().'&euro;<br />';
$contaAna->retirar(50000);
echo 'Saldo Ana: '.$contaAna->getValor().'&euro;<br />';
$contaPedro->depositar(30000);
echo 'Saldo Pedro: '.$contaPedro->getValor().'&euro;<br />';

?>