<?
class Llibre{
  function Llibre($row){
    $this->title=$row['title'];
    $this->author=$row['author'];
  }
  function show(){
    echo $this->title;
    echo $this->author;
  }
}
?>
