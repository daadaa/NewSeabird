<!-- Menu du site réplicable par tout en utilisant "$this->element('menu')" -->

<div class="menu">	
	<h1 class="tete">Menu</h1>
	<hr>
	<br>
	<ul>
		<li class="ListeMenu" ><?php echo $this->Html->link('information sur importation des fichiers Excel',array('controller'=> 'ExcelInfo','action'=>'index'));?></li>
		<li class="ListeMenu" ><?php echo $this->Html->link('Upload de fichier',array('controller'=> 'Upload','action'=>'index'));?></li>
		<li class="ListeMenu" ><?php echo $this->Html->link('Contact',array('controller'=> 'Contact','action'=>'index'));?></li>
	</ul>
	
	<hr>
	<br>
	<hr>
</div>