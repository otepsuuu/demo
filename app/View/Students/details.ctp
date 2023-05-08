<br>
<?php echo $this->Form->button($this->Html->link('Back', array('controller'=>'Students', 'action'=>'index'))); ?>

<?php echo ($id!=null)? '<h2>Edit Student Information</h2>': '<h2>Add Student</h2>'?>
<?php
    echo $this->Form->create('Student');
    echo ($id!=null)? $this->Form->input('id', array('type'=>'hidden')) : null ;
    echo $this->Form->input('name', array('required', 'label'=>'Name:'));
    echo $this->Form->input('email', array('required','label'=>'Email:', 'type' => 'email'));
    echo $this->Form->input('address', array('required', 'label'=>'Address:'));?>
    <br>
    <?php echo $this->Form->submit('Save', array('class'=>'save')); ?>

<style>
    input, form {margin: 0px 0px 3px 10px;}
    a {text-decoration: none; color: #000000; margin-left: 10px;}
    button a {text-decoration: none; color: #ffffff; margin: 0 auto;}
    button { background-color: green; border-color: green; border-radius: 5px; margin-left: 10px;}
    h2{margin-left: 10px;}
    .message {color: red;}
    .save {background-color: gray; border-color: gray; border-radius: 5px; margin-left: 10px; color: white;}
</style>