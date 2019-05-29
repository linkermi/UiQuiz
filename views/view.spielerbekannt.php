<?php
$liste=Core::$view->bekannteSpieler;
?>
<h5>Letzte Gegner</h5>
<table data-role="table" id="laufend" data-mode="column-toggle: none" class="ui-responsive">
  <thead>
    <tr>
     
      <th data-priority="persist">Spieler</th>
      <th data-priority="2">Rating</th>
       <th data-priority="2">Eigene Partien</th>
      <th data-priority="2">Einladen</th>
    </tr>
  </thead>
  <tbody>
  <?php
/* @var $item User */
  foreach($liste as $item){
     
   ?>
<tr>
     
      <td><?=$item->nickname?></td>
      <td><?=$item->rating?></td>
      <td><?=$item->Partien?></td>
    
       <td >
           <a href="?task=spielerstellen&id=<?=$item->m_oid?>"  data-ajax="false">
               <i  class="fas fa-plus-circle" > </i>
           </a>
       </td>
     
</tr>
<?php }
?>
  </tbody>
</table>
