<?
require_once "llibre.php";

function iniciales($nombre) {
  $trozos = explode(' ',$nombre);
  $iniciales = '';
  for($i=0;$i<count($trozos);$i++){
    $iniciales .= substr($trozos[$i],0,1);
  }
  return $iniciales;
}

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
    $res_copy=mysql_query("select *
        from biblio_copy as c join biblio as l
        on c.bibid=l.bibid join collection_dm as co
        on co.code=l.collection_cd
        ;");
    while($row_copy=mysql_fetch_assoc($res_copy)){
      $llista[]=new Llibre($row_copy);
    }
    return $llista;
  }
}

?>
