<?php include 'header.ctp';?>
<div class="container container-rev">
  <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-user-plus fa-1x')),
    array('controller'=>'Users', 'action'=>'details', 'add', 'full_base' => true),
    array('escape' => false, 'class'=>'btn btn-primary add')); ?>
  <div class="row">
    <div class="col-lg-4">
        <h3>List of Users</h3>
    </div>
    <div class="col-lg-8" align="right">
        <?php
        //search bar
        echo $this->Form->create(null, ['type'=>'get', 'class'=>'form-inline']);
        echo $this->Form->control('name', array('value'=>$name, 'placeholder'=>'Name...', 'label'=>'Name:', 'class'=>'form-control search')); 
        echo $this->Form->control('username', array('value'=>$username,'placeholder'=>'Username...', 'class'=>'form-control search')); 
        echo $this->Form->control('email', array('value'=>$email,'placeholder'=>'Email...', 'class'=>'form-control search')); 
        echo $this->Form->submit('View', array('class'=>'btn btn-default form-control', 'div' => false));
        ?>
    </div>
  </div>
  
<?php echo $this->Session->flash();?>

     <!-- User List -->
<!--<div class="container">
  <?php
    if($data==null){ echo 'No results found.';}
    else{?>
    
        <table class="table table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach($data as $row): ?>
                <tr>
                    <td data-label="Name"><?php echo $this->Html->link($row['User']['name'], array('controller'=>'Users', 'action'=>'information', $row['User']['id'])); ?></td>   
                    <td data-label="Email"><?php echo $row['User']['email'] ?></td>   
                    <td data-label="Action"><?php echo $this->Html->link('Edit', array('controller'=>'Users', 'action'=>'details','edit', $row['User']['id']))?>
                        <?php echo $this->Html->link('Delete', array('controller'=>'Users', 'action'=>'details', 'delete', $row['User']['id']),
                        array('confirm'=>'Are you sure you want to delete this user?'))?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                
            </tr>
            </tfoot>
        </table>
    <?php }?>
</div>-->
<hr>
<!--<h2>Data Table</h2>-->
    <table id="user" class="table table-responsive table-hover table-striped border table-condensed">
      <thead>
          <tr>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th class="action">Action</th>
          </tr>
      </thead>
      <tbody>
        <?php  foreach($data as $row): ?>
            <tr>
              <td class="text-left" data-label="User Id"><?php echo $row['User']['id'] ?></td>   
              <td data-label="Name"><?php echo $this->Html->link($row['User']['name'], array('controller'=>'Users', 'action'=>'information', $row['User']['id'])); ?></td>   
              <td data-label="Email"><?php echo $row['User']['email'] ?></td>   
              <td data-label="Action">
                <div class="act">
                <div class="btn-group btn-group-justified">
                  <?php echo $this->Html->link('Edit',array('action'=>'details','edit',$row['User']['id']),array('class'=>'btn btn-default btn-sm')); ?>
                  <?php echo $this->Html->link('Delete',array('action'=>'details', 'delete', $row['User']['id']), 
                                    array('class'=>'btn btn-default btn-sm', 'confirm'=>'Are you sure you want to delete this user?'));?>
                </div>
                </div>
              </td>
            </tr>
        <?php endforeach; 
        ?>
      </tbody>
    </table>
</div>
        
<style>
    a {text-decoration: none; color: #337ab7;}
    .search {margin: 0px 10px 3px 0px;}
    table td{padding-left: 10px;}
    .btn.form-control{ margin-top: -3px;}
    hr {height:2px;border-width:0;color:gray;background-color:gray}
    .action{width: 220px;}
  @media (max-width: 1199px){.container {width: 100%;}}
  @media (max-width: 767px){
    .table thead{
      display: none;
    }
    .table, .table tbody,.table tr,.table td{
      display:block;
      /*width: 100%;*/
	  }
    .table tr{
		  margin-bottom: 40px;
	  }
    .table tbody tr td {
      text-align: right;
      position: relative;
	  }
    .table td:before{
      content: attr(data-label);
      position: absolute;
      left: 0;
      width: 50%;
      padding-left: 15px;
      font-weight: 600;
      font-size: 14px;
      text-align: left;
	  }
    input {margin: 0px 0px 3px 0px;}
    hr{height:0px;}
    div.dataTables_wrapper div.dataTables_length, 
    div.dataTables_wrapper div.dataTables_filter, 
    div.dataTables_wrapper div.dataTables_info 
    {
      text-align: left;
    }
    div.dataTables_wrapper div.dataTables_paginate {
      text-align: right;
    }
    .act{margin-left: 90px;}
  }
</style>
<script>
$(document).ready(function () {
    $('#user').DataTable({
        lengthMenu: [
            [1, 5, 10, 25, 50, -1],
            [1, 5, 10, 25, 50, 'All'],
        ],
    });
});
</script>