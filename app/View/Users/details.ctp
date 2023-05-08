<?php include 'header.ctp';?>
<div class="container container-rev">
<script>
    document.write('<a href="' + document.referrer + '" class="btn btn-default">Back</a>');
</script>
        <?php echo ($id!=null)? '<h2>Edit User Information</h2>': '<h2>Add User</h2>'?>
    <div class="row">
    <div class="col-md-12">
        <?php
            echo $this->Session->flash();
            echo $this->Form->create('User', ['enctype'=>'multipart/form-data'], array('class'=>'form-horizontal'));
            echo ($id!=null)? $this->Form->input('id', array('type'=>'hidden')) : null ;
            echo $this->Form->input('name', array('required', 'label'=>array('Name:','class'=>'input-group-addon'), 'div'=>array('class' => 'input-group'), 'class'=>'form-control'));
            echo $this->Form->input('email', array('required', 'label'=>array('Username:','class'=>'input-group-addon'), 'div'=>array('class' => 'input-group'), 'class'=>'form-control'));
            if ($id==null){
                echo $this->Form->input('username', array('required', 'label'=>array('Username:','class'=>'input-group-addon'), 'div'=>array('class' => 'input-group'), 'class'=>'form-control'));
                echo $this->Form->input('password', array('required','label'=>array('Password:','class'=>'input-group-addon'), 'type' => 'password', 'div'=>array('class' => 'input-group'), 'class'=>'form-control'));
                echo $this->Form->input('retypepassword', array('required','label'=>array('Retype Password:','class'=>'input-group-addon'), 'type' => 'password', 'div'=>array('class' => 'input-group'), 'class'=>'form-control'));
            }
            echo $this->Form->input('image_file', array('accept'=>'image/png, image/jpeg','required','type' => 'file','label'=>array('Image File:','class'=>'input-group-addon', 'id'=>'files','onchange'=>'imageURL(this)'), 'div'=>array('class' => 'input-group'), 'class'=>'form-control'));
             ?>
             
            <br>
            <?php echo $this->Form->submit('Save', array('class'=>'btn btn-md btn-success', 'div'=>array('align' => 'right')));
            echo $this->Form->end(); 
            ?>
    </div>
    </div>
</div>
<style>
    label{margin: 5px 0px 3px 10px;}
    a {text-decoration: none; color: #000000;}
    .message {color: red;}
</style>