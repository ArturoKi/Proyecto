<!-- MODAL de usuario-->
<?php
$sel_val = $con->query("SELECT * FROM preguntas");
?>
<div id="modal_valoracion" class="modal blue lighten-5">
    <div class="modal-content">
        <h4 class="center-align">Valoracion</h4>
        <form class="form" action="#" method="post" enctype="multipart/from-data">
        <?php
        $conta = 1;
        while($f = $sel_val->fetch_assoc()){
          ?>
        <h6 class="col l7 m6 s12"><?php echo $f['pregunta'];?></h6>
        <div>
          <input type="radio" name="val_<?php echo $f['id_pregunta']?>" id="sentiment_very_dissatisfied_<?php echo $conta?>" value="1">
          <label for="sentiment_very_dissatisfied_<?php echo $conta?>"><i class="material-icons">sentiment_very_dissatisfied</i> 1</label>
        </div>
        <div>
          <input type="radio" name="val_<?php echo $f['id_pregunta']?>" id="sentiment_dissatisfied_<?php echo $conta?>" value="2">
          <label for="sentiment_dissatisfied_<?php echo $conta?>"><i class="material-icons">sentiment_dissatisfied</i> 2</label>
        </div>
        <div>
          <input type="radio" name="val_<?php echo $f['id_pregunta']?>" id="sentiment_neutral_<?php echo $conta?>" value="3">
          <label for="sentiment_neutral_<?php echo $conta?>"><i class="material-icons">sentiment_neutral</i> 3</label>
        </div>
        <div>
          <input type="radio" name="val_<?php echo $f['id_pregunta']?>" id="sentiment_satisfied_<?php echo $conta?>" value="4">
          <label for="sentiment_satisfied_<?php echo $conta?>"><i class="material-icons">sentiment_satisfied</i> 4</label>
        </div>
        <div>
          <input type="radio" name="val_<?php echo $f['id_pregunta']?>" id="sentiment_very_satisfied_<?php echo $conta?>" value="5">
          <label for="sentiment_very_satisfied_<?php echo $conta?>"><i class="material-icons">sentiment_very_satisfied</i> 5</label>
        </div>
        <?php
      $conta = $conta + 1;
     }?>
     <div class='left-aling'>
         <button type="submit" id="btn" class="btn white green-text waves-effect waves-green">Valorar</button>
     </div>
        </form>
    </div>
</div>
