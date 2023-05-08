<?php include ($_SERVER['DOCUMENT_ROOT'].'/demo/app/View/Users/header.ctp');?>
<?php //echo $this->Html->link('Back', array('controller'=>'Users', 'action'=>'index'), array('class'=>'btn btn-default')); ?>
<div class="container container-rev">
<?php echo $this->Html->link('Add Student', array('controller'=>'Students', 'action'=>'details', 'add'), array('class'=>'btn btn-primary')); ?>
  <div class="row">
    <div class="col-sm-4">
        <h3>List of Students</h3>
    </div>
    <div class="col-sm-8" align="right">
        <?php
        //search bar
            echo $this->Form->create(null, ['type'=>'get', 'class'=>'form-inline']);
            echo $this->Form->control('name', array('value'=>$name, 'placeholder'=>'Name...', 'label'=>'Name:', 'class'=>'form-control')); 
            echo $this->Form->control('email', array('value'=>$email,'placeholder'=>'Email...', 'class'=>'form-control')); 
            echo $this->Form->control('address', array('value'=>$address,'placeholder'=>'Address...', 'class'=>'form-control')); 
            echo $this->Form->submit('Search', array('class'=>'btn btn-default form-control', 'div' => false));
            echo $this->Form->end();
        ?>
    </div>
  </div>
<strong><?php echo $this->Session->flash();?></strong>
     <!-- Student List -->
<br>
    <?php
        if($data==null){ echo 'No results found.';}
        else{?>
            <table class="table table-responsive table-hover table-striped">
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                    <?php  foreach($data as $row): ?>
                <tr>
                        <?php //echo $row['Student']['name']; ?>
                    <td><?php echo $this->Html->link($row['Student']['name'], array('controller'=>'Students', 'action'=>'information', $row['Student']['id'])); ?></td>
                    <td><?php echo $this->Html->link('Edit', array('controller'=>'Students', 'action'=>'details','edit', $row['Student']['id']))?>
                        <?php echo $this->Html->link('Delete', array('controller'=>'Students', 'action'=>'details', 'delete', $row['Student']['id']),
                        array('confirm'=>'Are you sure you want to delete this student information?'))?></td<br>
                
                </tr>
                    <?php endforeach; ?>
                <?php echo ($data==null)? '<a>No results found.</a>': null?>
            </table>
</div>
    <?php }?>
<style>
    a {text-decoration: none; color: #000000;}
    button a {text-decoration: none; color: #ffffff; margin: 0 auto;}
    button { background-color: green; border-color: green; border-radius: 5px; margin-left: 10px;}
    .logout{background-color: orange; border-color: orange;}
    input {margin: 0px 0px 3px 10px;}
    table td{padding-left: 10px;}
    .btn.form-control{ margin-top: -3px;}
</style>