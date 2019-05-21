<div id="aaa" style="z-index: 4;opacity: 0.5;position: absolute"> 

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
       <button type="submit" name="login" id="login" value="1">anmelden</button>
	</div>
</form>
</div>





<style>
html, body {
  display: block;
  position: relative; 
  overflow: hidden; 
  max-width: 100vw; 
  min-height: 100vh; 
  margin: 0; 
  padding: 0;
}
body {
  background-image: url( 'https://images.wallpaperscraft.com/image/mountains_night_sky_stars_92704_2560x1440.jpg' ); 
  background-color: black; 
  background-position: center bottom; 
  background-repeat: no-repeat; 
  background-size: cover; 
}

</style>