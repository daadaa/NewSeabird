<!-- page pour l'upload-->
<?php
	
	echo $this->element('menu');
	
?>

<div class="Ctt">
	
	<?php echo $this->Form->create('Species'); ?>
		<?php
			//debug($bird);
		?>
		<center><h2>A remplir pour l'espèce :</h2></center>
			
			Ordre : <?php echo $this->Form->input('oder',array('label' => false));?> 	
			Famille : <?php echo $this->Form->input('family',array('label' => false));?> 
			Gène : <?php echo $this->Form->input('genus',array('label' => false));?> 
			SP : <?php echo $this->Form->input('sp',array('label' => false));?> 
			Nom : <?php echo $this->Form->input('name',array('label' => false));?> 
			Code : <?php echo $this->Form->input('code',array('label' => false));?> 
			
		<center><h2>A remplir pour l'oiseeau :<h2></center>
		
			Banc : <?php echo $this->Form->input('band',array('label' => false));?> 
			Sexe : <?php echo $this->Form->input('sex',array('label' => false));?> 
			Numéro de bague : <?php echo $this->Form->input('numRing',array('label' => false));?> 
		
			 <?php echo $this->Form->input('balise',array('options' => array('GPS', 'Argos', 'GLS'), 'empty' => 'choisir'  ));?> 
		
		<?php echo $this->Form->submit('Sauvegarder les données');?>
		
	<?php echo $this->Form->end(); ?>
</div>