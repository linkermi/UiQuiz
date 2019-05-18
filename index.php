<?php require("includes/system.main.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<link rel="stylesheet" href="css/themes/hs.css" />
<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
<link href="css/themes/jqm-icon-pack-fa.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mobile.custom.structure.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<script src="includes/js/jquery-2.1.3.min.js"></script>
<script src="includes/js/jquery.mobile.custom.min.js"></script>
<script src="includes/js/jquery.validate.min.js"></script>
<script src="includes/js/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.js"></script>
<script src="p5/p5.min.js"></script>

<!-- scripte für die sich auflößende box -->
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></script>
<!-- Hallo -->

<script type="text/javascript">
     $(function () {
 
 

 
 
	 <?php
	 foreach(Core::$javascript as $script ){ 
             if(is_file($script)){
           
                include($script); 
             }else
             {
               core::debug("Javaskriptdatei: ".$script." konnte nicht geladen werden" )  ;
             }
             
         }
	 ?>
 
  
   
});
    
    
    
    
        function ajaxload(task, views, render=0){
        if(render===0){
            renderContainer=views;
        }else{
            renderContainer=render;
        }        
          $.get( 'index2.php?task='+task+'&view='+views, function( data ) {      
                 $( '#'+renderContainer).html(data);
                  $('#page1').trigger('create');
          });
        }
        function ajaxpost(element, task, destination, render=0){
        
            if(render===0){
               renderContainer=destination;
            }else{
               renderContainer=render;
            }     
            console.log(element);         
            var formdata = $(element).closest('form').serialize();
            $.post('index2.php?task='+task+'&view='+destination, formdata,function(data){                  
                      $( '#'+renderContainer ).html( data ); 
                         $('#page1').trigger('create');
           });
        }


</script>


</head>

<body>
 <div data-role="header" id="header" data-position="fixed" class="ui-header ui-bar-inherit ui-header-fixed slidedown ui-fixed-hidden">
    
  
    <div id="menu">
       	  <a href="#menupanel" data-role="button" data-icon="bars" data-mini="true" data-iconpos="notext" data-inline="true" class="ui-link ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-mini"></a>
         <?php 
         echo "".core::$title ;
         if ($core::$user->nickname!=""){
             ?> 
          <?php
         echo " <small>".core::$user->nickname." (".Core::$user->rating.")</small>";

              
         }        
                 ?>
    </div>
    
    <div id="logo" ></div>
     <?php if ($core::$user->nickname!=""){
             ?> 
     <div style="float:right;"><img style="border-radius: 2em;margin-top: 3px;margin-right: 5px;" src="includes/images/<?=Core::$user->avatar?>" alt="avatar" width="32" height="32"/></div>
     <?php    }        
                 ?>
     <div id="search">
     	
   
 
     
     
     </div>
  </div>
<div id="page1" class="page" data-role="page">

 
  <div data-role="content" class="ui-content" id="maincontent">
      <?php 
      require(Core::$navbar) ?>
        <?php if(count(Core::$errorMsg)>0) { ?>
      <div id="ErrorMessage" class="errorMessage">
   
    <?php echo(Core::showErrors());?>
   </div>
   <?php } ?>
   <?php if(count(core::$message)>0) { ?>
      <div id="message" class="message">
   
    <?php echo(Core::showMessages());?>
   </div>
   <?php } ?>
       <script type="text/javascript">
        function fadeMessage(){
   $('#message').fadeTo("fast",1);
  $('#message').fadeTo("slow",0);
  // $('#message').fadeOut("slow");
}
setTimeout(fadeMessage, 2500);
    </script>
  <div id="views">
    <div id="view1">
    <?php 
  Core::$view->render("view1");
    ?>
   </div>
   <div id="view2">
    <?php Core::$view->render("view2");?>
   </div>
    <div id="view3">
    <?php Core::$view->render("view3");?>
   </div>
      <div id="view4">
    <?php Core::$view->render("view4");?>
   </div>
 </div>
  <?php if(core::$debugMode==1){?>
  <div id="debug">

  <?php
  if(Core::$debugPrint==1 ){
     if(count(core::$debug)>0){
      var_dump(core::$debug);    
     }
  }
  
  if(Core::$debugConsole==1 && count(core::$debug)>0){
  ?>
      <script language="javascript">
    <?php foreach(core::$debug as $debugitem){
        ?>      
    console.log(<?=json_encode($debugitem);?>);
          
    <?php } ?></script>
 <?php
  }
  ?>
  </div>
      <div id="phpErrors">
  <?php }
  foreach($debugarray=xdebug_get_collected_errors() as $info){
   echo($info);
  }
  ?></div>
</div>

</div>
    
   
</body>

</html>