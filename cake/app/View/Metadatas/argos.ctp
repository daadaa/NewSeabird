
<!-- page pour l'upload-->
<?php
	
	echo $this->element('menu');
	
?>
<div class='Ctt'>

	Formulaire ou pas ??
	
<?php echo $this->Form->create(array('type' => 'file'));?>
	

<?php
    echo $this->Form->file('fichier');
?>
</fieldset>
<?php echo $this->Form->end('Submit');?>

</div>