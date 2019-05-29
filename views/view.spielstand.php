<?php
  /* @var $frage Frage */
  /* @var $spiel Spiel */
//$antworten=Core::$view->$antworten;
$frage=Core::$view->Frage;
$spiel=Core::$view->Spiel;
$antworten=Core::$view->Antworten;

if($spiel->wait){
    $weiter="Auf Gegnerantwort warten";
}else{
    $weiter="zur Frage";
}
?>

 <div style="z-index: 4" class="ui-grid-a">
      <div class="ui-block-a players"><?php
    if($spiel->Ersteller==Core::$user->m_oid){
        echo"<i>".$spiel->Host."</i>";
    }else{
         echo $spiel->Host;
    }
                
    ?></div>
    <div style="z-index: 4" class="ui-block-b players"><?php
  if($spiel->Teilnehmer==Core::$user->m_oid){
        echo"<i>".$spiel->Gast."</i>";
    }else{
         echo $spiel->Gast;
    }
?></div>  
    <div style="z-index: 4" class="ui-block-a points"><?=$spiel->punkteA?>(<?=$spiel->fragenA?>)</div>   
    <div style="z-index: 4" class="ui-block-b points" ><?=$spiel->punkteB?>(<?=$spiel->fragenB?>)</div>  
    <div style="z-index: 4" class="ui-block-a times"><?=$spiel->TPA?> TP</div>
    <div style="z-index: 4" class="ui-block-b times"><?=$spiel->TPB?> TP</div>
  </div>
 















<form style="z-index: 4" name="formstart" id="start" action="?task=play2&id=<?=$spiel->m_oid?>" data-ajax="false" method="post">
 <button style="z-index: 4" type="submit" name="start" id="start" value="1" <?php if($spiel->wait)echo'disabled="disabled"';?>><?=$weiter?></button>
    
</form>
<a style="z-index: 4" data-ajax="false">
 <i style="z-index: 4"  class="fas fa-angle-double-left"></i>
</a>