

<div id="aaa" style="z-index: 4;opacity: 0.8;position: absolute"> 

<?php
$avatars=Core::$view->avatars;
?>
<form id="loginForm" method="post" action="?task=registrieren" data-ajax="false">
	<div class="ui-field-contain">
            <input id="vorname" placeholder="Vorname" name="vorname" />
            <input id="nachname" placeholder="Nachname" name="nachname" />
		<input id="kennung" placeholder="Kennung/Mail" name="kennung" />
                <input id="nickname" placeholder="Nickname" name="nickname" />
		<input id="passwort" placeholder="Kennwort" name="passwort" type="password" />
                <input id="passwort2" placeholder="Kennwort wiederholen" name="passwort2" type="password" />
		 <?php  Help::htmlImageRadioGroup($avatars,array( "label"=>"Avatar","name"=>"avatar", "key"=>"myval"))?>
       <button type="submit" name="login" id="login" value="1">registrieren</button>
	</div>
</form>
</div>
<div style="width: 100%;height: 100%;position: absolute;margin-left: 0px;margin-top: 0px">
    
<iframe src="views/view.animation.php" width="100%" height="100%" style="z-index: 3"></iframe>
</div>

<style> #loginForm{
    background-color: #f90a0a !important/*{a-bup-background-color}*/
    position:relative;
    top:0px ;;}

</style>



<style> #login{
    background-color: #3388cc !important/*{a-bup-background-color}*/;}


</style>

<!--<style>
    #Johnny{display: block;
  position: relative; 
  overflow: hidden; 
  max-width: 100vw; 
  min-height: 100vh; 
  margin: 0; 
  padding: 0;
  background-image: url( 'https://images.wallpaperscraft.com/image/mountains_night_sky_stars_92704_2560x1440.jpg' ); 
  background-color: black; 
  background-position:  bottom; 
  background-repeat: no-repeat; 
  background-size: cover; }
    
</style> -->

