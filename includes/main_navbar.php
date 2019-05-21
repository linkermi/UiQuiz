<div id="menupanel" data-role="panel" data-display="overlay">
    <a href="?task=home" data-role="button"  data-theme="a" data-ajax="false">
    <i href="?task=home" data-role="button" data-icon="home" data-theme="a" data-ajax="false" class="fas fa-home">  Home</i>
    </a>
    <?php if(Core::$user->gruppe==2){ ?>
    <a href="?task=fragenlist" data-role="button" data-icon="home" data-theme="a" data-ajax="false" >Fragen</a>
    <?php } ?>
    <?php if(Core::$user->gruppe>=1){ ?>
    <a href="?task=spielerstellen" data-role="button"  data-theme="a" data-ajax="false" >
        <i href="?task=spielerstellen" data-role="button"  data-theme="a" data-ajax="false"class="far fa-plus-square">  Spiel erstellen </i>
    </a>
    <?php } ?>
      <?php if($_SESSION['uid']==""){?> 
    <a href="?task=login" data-role="button"  data-ajax="false">
        <i href="?task=login" data-role="button"  data-ajax="false" class="fas fa-sign-out-alt">    Login</i>
    </a>
        <?php }?>
   <?php if($_SESSION['uid']!=""){?>
      <a href="?task=logout" data-role="button"   data-ajax="false">
          <i href="?task=logout" data-role="button"   data-ajax="false" class="fas fa-sign-out-alt"> Logout</i>
      </a>
          
      <?php }?>
    
    
    
</div>
