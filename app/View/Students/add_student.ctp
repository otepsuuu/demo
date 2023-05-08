<?php echo $this->Form->button($this->Html->link('Back', array('controller'=>'Students', 'action'=>'index'))); ?>
<h2>Add student</h2>
<?php
    echo $this->Form->create('Student');
    echo $this->Form->input('name', array('required', 'label'=>'Name:'));
    echo $this->Form->input('email', array('required','label'=>'Email:', 'type' => 'email'  ));
    echo $this->Form->input('address', array('required', 'label'=>'Address:'));?>
    <br>
    <?php echo $this->Form->submit('Submit'); ?>

<style>
    input {margin: 0px 0px 3px 10px;}
</style>