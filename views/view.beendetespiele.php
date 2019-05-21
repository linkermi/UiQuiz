<?php
$liste=Core::$view->beendeteSpiele;
?>



<details>
    <summary>
        <h5>Kürzlich beendet
            <style>
                h5::after{content: "+";
                float: right;
                margin-right: 5px;}
            </style>
        </h5>
    </summary>
<table id="beendet" data-role="table" data-mode="columntoggle:none" class="ui-responsive">
  <thead>
    <tr>
     
        <th data-priority="persist">Gegner</th>
    
        
      
       <th data-priority="persist"></th>
        <th data-priority="persist"></th>
      <th data-priority="persist"></th>
          <th data-priority="persist"></th>
    <th data-priority="persist"></th>
        <th data-priority="persist"></th>
   
    </tr>
  </thead>
  <tbody>
  <?php
/* @var $item Spiel */
  foreach($liste as $item){
     
   ?>
<tr>
    <?php   if($item->userid_1!=Core::$user->m_oid){ $avatar=$item->avatar1;}else{$avatar=$item->avatar2;} ?>
       <td style="padding-right:0;padding-bottom:0px;"><img style="border-radius: 2em;margin:0;padding-top: 1px;" src="includes/images/<?=$avatar?>" alt="avatar" width="80" height="80"/></td>
        <td><?php
           if($item->userid_1!=Core::$user->m_oid){
               echo $item->nickname;
               $p1=$item->punkteA;
               $p2="<b>".$item->punkteB."</b>";
           }else{
               echo $item->nick2;
                $p1="<b>".$item->punkteA."</b>";
               $p2=$item->punkteB;
               } ?>
          </td>
          <td><?=$p2?>-<?=$p1?></td>
     
        <td class="result"><?=$item->standingA.$item->standingB?></td>
        <td><?=Help::toDateShort($item->m_ts)?></td>
        <td><?=$item->ergebnis?></td>
        <td width="60px" >
            <a href="?task=archivdetail&id=<?=$item->m_oid?>"  data-ajax="false"  > 
                <i href="?task=archivdetail&id=<?=$item->m_oid?>" class="fas fa-search"></i>
            </a>
        </td>
        
</tr>
<?php }
?>
  </tbody>
</table>
</details>

<script>
    var config = {
        type: Phaser.AUTO,
        width: 800,
        height: 600,
        physics: {
            default: 'arcade',
            arcade: {
                gravity: { y: 200 }
            }
        },
        scene: {
            preload: preload,
            create: create
        }
    };

    var game = new Phaser.Game(config);

    function preload ()
    {
        this.load.setBaseURL('http://labs.phaser.io');

        this.load.image('sky', 'assets/skies/space3.png');
        this.load.image('logo', 'assets/sprites/phaser3-logo.png');
        this.load.image('red', 'assets/particles/red.png');
    }

    function create ()
    {
        this.add.image(400, 300, 'sky');

        var particles = this.add.particles('red');

        var emitter = particles.createEmitter({
            speed: 100,
            scale: { start: 1, end: 0 },
            blendMode: 'ADD'
        });

        var logo = this.physics.add.image(400, 100, 'logo');

        logo.setVelocity(100, 200);
        logo.setBounce(1, 1);
        logo.setCollideWorldBounds(true);

        emitter.startFollow(logo);
    }
    </script>