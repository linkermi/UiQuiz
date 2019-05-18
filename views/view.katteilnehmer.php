<?php
/* @var $Teilnehmer User */
$kategorien=Core::$view->kategorien;
$Teilnehmer=Core::$view->Ersteller;
$a=1;
?>

<form id="spielcreate" method="post" action="?task=accept&id=<?= Core::$view->id?>" data-ajax="false">
	<div class="ui-field-contain">
             <div><img style="border-radius: 2em;margin:0;padding-top: 1px;" src="includes/images/<?=$Teilnehmer->avatar?>" alt="avatar" width="38" height="38"/> <?=$Teilnehmer->nickname.'('.$Teilnehmer->rating.')'?></div>
            <input type="hidden" id="id"  name="id" value="<?= Core::$view->id?>" />
		 <?php Help::htmlSelect($kategorien,array("type"=>"buttonmini", "label"=>"Kategorie 1","name"=>"Kategorie1"))?>
		 <?php Help::htmlSelect($kategorien,array("type"=>"buttonmini", "label"=>"Kategorie 2","name"=>"Kategorie2"))?>
              <button type="submit" name="create" id="create" value="1">los geht's</button>
        </div>
</form>



 <div id="dialog" title="Obacht !">
   <p>Herzlichen Glückwunsch, dein Spiel wird angelegt, jetzt geht's los !!</p>
  </div>
 
  <button id="opener">Open Dialog</button>


  
    <script type="text/javascript">
  

         $(function() {
         $( "#dialog" ).dialog({
             autoOpen: false,
             show: {
             effect: "blind",
              duration: 1000
                },
            hide: {
            effect: "explode",
            duration: 1000
               }
              });
           $( ".ui-link  ui-btn ui-icon-plus ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" ).click(function() {
           $( "#dialog" ).dialog( "open" );
            });
            });
    </script>

  
