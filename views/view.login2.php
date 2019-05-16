

<div id="aaa" style="z-index: 4;opacity: 0.5;position: absolute"> 
        
    <form id="loginForm" method="post" action="?task=login" data-ajax="false">
	<div class="ui-field-contain">
		<input id="username" placeholder="Benutzername" name="username" />
		<input id="passwort" placeholder="Kennwort" name="passwort" type="password" />
		
       <button type="submit" name="login" id="login" value="1">anmelden</button>
       <a href="?task=registrieren" data-ajax="false" data-role="button">Registrieren</a>
	</div>
</form>
</div>


<div style="width: 100%;height: 100%;position: absolute;margin-left: 0px;margin-top: 0px">
    
<iframe src="views/view.animation.php" width="100%" height="100%" style="z-index: 3"></iframe>
</div>
