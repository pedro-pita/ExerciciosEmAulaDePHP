<?
    /*Os padroes sao organizados em 3 familias_
       Padroes de criação : relacionados a criação
     */

class BaseDados{
    //referencia a instancia
    public static $m_pInstance;
    //Constructer privado apenas permite ser instanciado pela propria classe 
    
    private function __construct(){
        echo "Construtor BD<br />\n";
    }
    public static function getInstance(){
        if(!self::$m_pInstance)
            self::$m_pInstance = new BaseDados();
        return self::$m_pInstance;
    }
    public function query(){
        echo "Query executada<br />\n";
        }
    }//end class
    function mainTest(){
        //Obter a instancia unica da classe de base de dados
        $pBaseDados = BaseDados::getInstance();//???????
        $pBaseDados->query();
    }
    mainTest();
    mainTest();
    mainTest();
    mainTest();
    mainTest();
?>