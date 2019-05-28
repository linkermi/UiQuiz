<?php
  /* @var $frage Frage */
  /* @var $spiel Spiel */
//$antworten=Core::$view->$antworten;
$frage=Core::$view->Frage;
$spiel=Core::$view->Spiel;
$ersteller=Core::$view->ersteller;
$teilnehmer=Core::$view->teilnehmer;
$antworten=Core::$view->Antworten;

?>
<style>
    .result > div:nth-child(<?=$spiel->roundLength?>n+0) {
        margin-right: 5px;
    }
      .result > div:nth-child(<?=$spiel->roundLength*4;?>n+1) {
        clear:both;
    }
</style>

  <b><?=Core::$view->ergebnisText?></b>

  <div class="ui-grid-a">
        <div class="ui-block-a points"><img style="border-radius: 2em;margin-top: 3px;margin-right: 5px;" src="includes/images/<?=$ersteller->avatar?>" alt="avatar" width="100" height="100"/></div>   
    <div class="ui-block-b points" ><img style="border-radius: 2em;margin-top: 3px;margin-right: 5px;" src="includes/images/<?=$teilnehmer->avatar?>" alt="avatar" width="100" height="100"/></div>  
      <div class="ui-block-a players"><?php
    if($spiel->Ersteller==Core::$user->m_oid){
        echo"<i>".$spiel->Host."</i>";
    }else{
         echo $spiel->Host;
    }
                
    ?></div>
    <div class="ui-block-b players"><?php
  if($spiel->Teilnehmer==Core::$user->m_oid){
        echo"<i>".$spiel->Gast."</i>";
    }else{
         echo $spiel->Gast;
    }
?></div>  
    <div class="ui-block-a points"><?=$spiel->punkteA?></div>   
    <div class="ui-block-b points" ><?=$spiel->punkteB?></div>  
    <div class="ui-block-a times"><?=$spiel->TPA?>s</div>
    <div class="ui-block-b times"><?=$spiel->TPB?>s</div>
  </div>
  
  
  
  

<br>

    
<?php 
foreach(Core::$view->kategorien as $kat){
    
   $kattexts= $kattexts.$kat->myval.",";
   
}
$kattexts=substr($kattexts,0,-1);
?> 
  

<div class="result">
    <?=$spiel->standingA;?><?=$spiel->standingB;?>
</div>
<div style="clear: both"><small><?=$kattexts?></small></div>
<div style="clear: both" class="ui-btn-active ui-btn ui-corner-all">Rating</div>
<div class="ui-grid-a" >
    <div class="players ui-block-a"><?php printf("%+d",$spiel->ratingPointsA)?></div>
    <div class="players ui-block-b"> <?php printf("%+d",$spiel->ratingPointsB)?></div>
    <div  class="players ui-block-a"><small><?=$spiel->ratingA;?> =&gt;<?=$spiel->ratingPointsA+$spiel->ratingA?></small></div> 
    <div class="players ui-block-b"><small> <?=$spiel->ratingB;?> =&gt;<?=$spiel->ratingPointsB+$spiel->ratingB?></small></div>
    
    
</div>
<a href="?task=home" >
  <i href="?task=home" data-role="button"  class="fas fa-angle-double-left"></i>
</a>






