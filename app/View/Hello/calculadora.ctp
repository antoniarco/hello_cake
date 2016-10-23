¡Ha llegado el momento de sumar!
<?php echo $this->Form->create(false, array(
          'url' => array('controller' => 'hello', 'action' => 'calculadora')
      ));
?>
<?php echo $this->Form->input('#1'); ?>
<?php echo $this->Form->input('#2'); ?>
<?php echo $this->Form->end('Calculate'); ?>
<?php if(isset($response))echo $response['msg'];?>