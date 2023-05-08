<?php echo $this->Form->button($this->Html->link('Back', array('controller'=>'Students', 'action'=>'index'))); ?>
<h2>Edit Student Details</h2>
<?php 
    echo $this->Form->create('Student');
    echo $this->Form->input('id', array('type'=>'hidden'));
    echo $this->Form->input('name', array('required', 'label'=>'Name:'));
    echo $this->Form->input('email', array('required', 'label'=>'Email:'));
    echo $this->Form->input('address', array('required', 'label'=>'Address:'));?><br>
<?php echo $this->Form->end('Update');
?>
<style>
    input {margin: 0px 0px 3px 10px;}
</style>