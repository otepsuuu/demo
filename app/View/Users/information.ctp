<?php include 'header.ctp';?>
<div class="container container-rev">
<?php echo $this->Html->link('Back', array('controller'=>'Users', 'action'=>'index'), array('class'=>'btn btn-default')); ?>
<h2>User Details </h2>
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-3">
                <center><?php echo ($data['User']['image_file']!='')? $this->Html->image('/img/users/'.$data['User']['image_file'], array('alt'=>'User Profile', 'width'=>'100%', 'height'=>'60%', 'class'=>'img-thumbnail')): $this->Html->image('default.png', array('alt'=>'User Profile', 'width'=>'80%', 'height'=>'60%', 'class'=>'img-thumbnail')); ?></center>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-7">
                <h3><strong><?php echo $data['User']['name']; ?></strong>
                <h5><strong><label>Username:</label></strong> <?php echo $data['User']['username']; ?><br>
                <h5><strong><label>Email:</strong> <?php echo $data['User']['email']; ?><br>
                <h5><strong><label>Date added:</strong> <?php echo date("F j, Y h:i a",strtotime($data['User']['created']));?><br>
            </div>
        </div>
    </div>
</div>
<style>
    .img-thumbnail{object-fit: cover;
    object-position: center center;
    width: 220px;
    height: 220px;}
    input, form, label{margin: 5px 0px 3px 10px;}
    label {display: inline-block; width: 90px; color: #777777; text-align:left ;}
    a {text-decoration: none; color: #000000; }
    .message {color: red;}
</style>