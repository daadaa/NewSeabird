


<?php echo $this->Form->create(array('type' => 'file'));?>

<?php
   
    echo $this->Form->file('fichier');
?>
</fieldset>
<?php echo $this->Form->end('Submit');?>