<?php echo $this->Form->create(false, array(
          'url' => array('controller' => 'hello', 'action' => 'calculadora')
      ));
?>
<?php echo $this->Form->input('Primer Valor'); ?>
<?php echo $this->Form->input('Segundo Valor'); ?>
<?php echo $this->Form->end('Calculate'); ?>