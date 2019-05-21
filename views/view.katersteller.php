<?php
/* @var $Teilnehmer User */
$kategorien=Core::$view->kategorien;
$Teilnehmer=Core::$view->Teilnehmer;
?>

<form id="spielcreate" method="post" action="?task=spielnew" data-ajax="false">
	<div class="ui-field-contain">
            <div><img style="border-radius: 2em;margin:0;padding-top: 1px;" src="includes/images/<?=$Teilnehmer->avatar?>" alt="avatar" width="38" height="38"/> <?=$Teilnehmer->nickname.'('.$Teilnehmer->rating.')'?></div>

            <input type="hidden" id="id"  name="id" value="<?=$Teilnehmer->m_oid?>" />
		 <?php Help::htmlSelect($kategorien,array("type"=>"buttonmini", "label"=>"Kategorie 1","name"=>"Kategorie1"))?>
		 <?php Help::htmlSelect($kategorien,array("type"=>"buttonmini", "label"=>"Kategorie 2","name"=>"Kategorie2"))?>
            <br>
              <button class="element-animation" type="submit" name="create" id="create" value="1">Herausfordern</button>
        </div>
</form>


<style> .element-animation{
  animation: animationFrames linear 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  -webkit-animation: animationFrames linear 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -moz-animation: animationFrames linear 1s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -o-animation: animationFrames linear 1s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -ms-animation: animationFrames linear 1s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
}

@keyframes animationFrames{
  0% {
    transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    transform:  translate(0px,0px)  rotate(0deg) ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    -moz-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -moz-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -moz-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -moz-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -moz-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -moz-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -moz-transform:  translate(0px,0px)  rotate(0deg) ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    -webkit-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -webkit-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -webkit-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -webkit-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -webkit-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -webkit-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -webkit-transform:  translate(0px,0px)  rotate(0deg) ;
  }
}

@-o-keyframes animationFrames {
  0% {
    -o-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -o-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -o-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -o-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -o-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -o-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -o-transform:  translate(0px,0px)  rotate(0deg) ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    -ms-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -ms-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -ms-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -ms-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -ms-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -ms-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -ms-transform:  translate(0px,0px)  rotate(0deg) ;
  }
}
    
</style>
  
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
           $( "#opener" ).click(function() {
           $( "#dialog" ).dialog( "open" );
            });
            });
    </script>

   <div id="dialog" title="Obacht !">
   <p>Hallo werter Spieler, hier kannst Du zwei Spielkategorien bestimmen aus einer Auswahl von 8 möglichen Kategorien. Du darfst nicht zweimal die gleiche Kategorie auswählen</p>
  </div>
 
  <button id="opener">Hilfe- Was soll ich machen ?</button>

 
