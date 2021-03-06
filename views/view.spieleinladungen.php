<?php
$liste=Core::$view->fremdeEinladungen;
?>

<details open="open">
    <summary>
    <h5>Eingeladen zu
        <style>h5::after{content: "+";
  float: right;
  margin-right: 5px;}
            details[open] h5:after {
  content: "-";
}
            </style>
   </h5>
    </summary>
<table id="eingeladen" data-role="table" data-mode="columntoggle:none" class="ui-responsive">
  <thead>
    <tr>
      <th data-priority="persist">von</th>
      <th data-priority="persist"></th>
      <th data-priority="2">Rating</th>
      <th data-priority="3">wann</th>
      <th data-priority="4">Spielen | Löschen</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
/* @var $item User */
  foreach($liste as $item){
     
   ?>
<tr>
    <td style="padding-right:0;padding-bottom:0px;"><img style="border-radius: 2em;margin:0;padding-top: 1px;" src="includes/images/<?=$item->avatar?>" alt="avatar" width="80" height="80"/></td>
      <td> <?=$item->nickname?></td>
      <td><?=$item->rating?></td>
      <!-- <td><a href="?task=spielerstellen&id=<?=$item->m_oid?>&nick=<?=$item->nickname?>" data-role="button">einladen</a></td> -->
      <td><?=date("d.m.",$item->erstellDatum)?></td>
      <td> <div data-role="controlgroup" data-type="horizontal">
              <a href="?task=accept&id=<?=$item->id?>&accept=true" >
                  <i href="?task=accept&id=<?=$item->id?>&accept=true" data-role="button"  class="far fa-play-circle"> </i>
              </a>
              <a href="?task=accept&id=<?=$item->id?>&accept=false">
              <i data-role="button"  class="far fa-trash-alt" href="?task=accept&id=<?=$item->id?>&accept=false"></i>
              </a>
          </div>
      </td>
        
     
</tr>
<?php }
?>
  </tbody>
</table>
</details>