<?
//uso padrao sem singleton
class dataBase{
    public function __construct(){
        echo "Construtor DataBase<br />";
    }
    public function query(){
        echo "Query executada em Database... <br />";
    }
}//end class db
function mainTest() {
    $database = new dataBase();
    $database->query();
}
mainTest();
mainTest();
mainTest();
mainTest();
?>