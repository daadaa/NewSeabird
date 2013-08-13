<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
 
    <!-- Le styles -->

    <?php 
      echo $this->Html->css('accueil.css');
	  ?>


  </head>
 
  <body>
    <div class="global">
	<div class="header">
		<h1 class="tete">Projet : SEABIRD</h1> 
	</div>
	<div class='content'>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
    </div>
	<div class="footer">
		<?php
			echo $this->Html->image('UR.png',array('class'=>'logU','width'=>'100px', 'height' => '100px'));
			echo $this->Html->image('UFR.png',array('class'=>'logE','width'=>'300px'));

		?>
	<div>
    </div> <!-- /container -->

  </body>
</html>
