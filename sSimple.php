<?
require_once "bd.php";
//require_once "llibre.php";
$db=new DB();

$search=false;
if(isset($_GET['search']) and $_GET['search']!=""){
  $s=trim($_GET['search']);
  $books=Array();
  foreach($db->getAllBooks($s) as $result)
    if(preg_match("/$s/i",$result->title.$result->author))
      $books[]=$result;

  $search=true;
}
?>
