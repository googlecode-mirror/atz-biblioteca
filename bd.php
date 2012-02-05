<?
require_once "llibre.php";

class DB{
  function DB(){
    $this->link=mysql_connect(
      "localhost",
      "root",
      "cagamandurries"
    );
    $this->dataBase=mysql_select_db(
      "OpenBiblio",
      $this->link
    );
  }
  function getAllBooks($word){
    $llista=Array();
    $res=mysql_query("select * from biblio;");
    while($row=mysql_fetch_assoc($res)){
      $llista[]=new Llibre($row);
    }
    return $llista;
  }
}

?>
