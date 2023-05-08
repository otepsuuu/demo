<?php echo $this->Form->button($this->Html->link('Back', array('controller'=>'Students', 'action'=>'index'))); ?>
<h2>Student Details </h2>

    <strong>Name:</strong> <?php echo $data['Student']['name']; ?><br>
    <strong>Email:</strong> <?php echo $data['Student']['email']; ?><br>
    <strong>Address:</strong> <?php echo $data['Student']['address']; ?><br><br>
