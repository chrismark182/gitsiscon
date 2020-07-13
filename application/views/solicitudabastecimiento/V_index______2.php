<?= form_open("/codigofacilito/recibidatos") ?>

<?php $nombre = array('name'=>'nombre','placeholder'=>'Escribe tu nombre');
?>

<input class="with-gap"  type="radio" name="myradio" value="1" <?php echo  set_radio('empresa', '1'); ?> />
<span></span>

<input type="radio" name="myradio" value="2" <?php echo  set_radio('myradio', '2'); ?> />



	<!--		
<input class="with-gap" name="empresa" type="radio" id="empresa1" value="Bigote"  <?=set_radio('empresa', '1')?>  />
<span>Bigote</span>
-->


<?=
form_close()
?>