<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
   

    <!-- Le styles -->

    <?php 
	echo $this->Html->css('accueil.css');
     ?>

  </head>
  

  <body>
    <div class="global">
		<div class="header">
			<h1 class="tete"><center>PROJET : SEABIRD</center></h1>  
		</div>
		
        <div class="content">
            <?php echo $this->fetch('content'); ?>
		</div>
 
		<div class="footer">
			<?php
				echo $this->Html->image('UR.png', array('class'=> 'logU', 'width'=>'100px', 'height'=>'100px'));
				echo $this->Html->image('UFR.png', array('class'=> 'logE', 'width'=>'300px'));
			?>
			
			<!--<img src="img/UR.png" alt="univ" class="logU" width="100px" height="100px">
			<img src="img/UFR.png" alt="ecomar" class="logE" width="300px" >-->
			<div class="info">
				<a href="test"> nous Contacter 1</a>	
							| 
				<a href="test"> plan du site</a>
			</div>
		
		</div>
    </div> <!-- /container -->

    
 
  </body>
</html>
