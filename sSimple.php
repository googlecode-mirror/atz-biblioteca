<?
require_once "bd.php";
//require_once "llibre.php";

$search=false;
if(isset($_GET['search'])){
  $s=$_GET['search'];
  $search=Array();
  foreach($bd->searchByName($s) as $result)
    $search[]=$result;
  foreach($bd->searchByAuthor($s) as $result)
    $search[]=$result;
}


















?>
