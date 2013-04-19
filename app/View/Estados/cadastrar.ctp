<?php echo $this->Form->create('Estado', array('method' => 'post', 'action' => 'cadastrar', 'class' => 'form-inline','inputDefaults'=> array('div' => false))) ?> <!-- Model, action -->
<?php echo $this->Form->input ('Nome', array('label' => 'Nome do Estado', 'type' => 'text', 'class' => 'input-small')) ?> 
<?php echo $this->Form->input ('SiglaEstado', array('label' => 'Sigla do Estado', 'type' => 'text', 'class' => 'input-small')) ?> 
<?php echo $this->Form->submit('Cadastrar', array('class' => 'btn', 'div' => false)); ?>
<?php echo $this->Form->end() ?>

