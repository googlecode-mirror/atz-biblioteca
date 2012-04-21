<?
class Llibre{
  function Llibre($row){
    $this->id=$row['copyid'];
    $this->title=$row['title'];
    $this->author=$row['author'];
    $this->isbn=$row['title_remainder'];
    $this->weblink=$row['responsibility_stmt']==''?'#':($row['responsibility_stmt'].'" target="_blank');
    $this->genere=$row['description'];
    $this->available=$row['status_cd']=='in';
    $this->location=$row['copy_desc']==''?iniciales($this->genere).'-??':$row['copy_desc'];
    $this->lang=$row['topic1'];
  }
  function show(){
    ?>
      <div class="well" style="overflow:hidden;">
        <div style="width:420px;float:left;">
          <h2><?= $this->title;?></h2>
          <h5 style="color:#aaa;margin-top:-10px;"><?= $this->author;?></h5>
          <h6 style="color:#aaa;margin-top:-10px;"><a href="<?=$this->weblink;?>"><?=$this->isbn;?></a></h6>
          <span class="label warning"><?=$this->genere;?></span>
          <span class="label"><?=$this->lang;?></span>
        </div>
        <div style="float:right;width:80px;text-align: right;">
          <?if($this->available):?>
            <span style="position:relative;top:0px;right:0px;" class="label success">disponible</span>
          <?else:?>
            <span style="position:relative;top:0px;right:0px;background-color: red;" class="label warning">no disponible</span>
          <?endif;?>
          <span style="background-color: #33ccff;" class="label"><?=$this->location;?></span>
        </div>
      </div>
    <?
  }
}
?>
