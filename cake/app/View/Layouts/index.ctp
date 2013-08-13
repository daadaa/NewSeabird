<!-- Page d'accès au site --> 
<div class="logo">
	  <img src="img/logo.png" >
</div>
<center>
	<p class="intro">bienvenue sur Seabird! accédez au site </p>
</center>
<br>
<center>
	<div class="enter">
		<?php
			echo $this->Html->link($this->Html->image("boutonEntrer.png",array("height"=>"120px")),
									"accueil",array("escape"=>false)
			);
		?>
	</div>
	 