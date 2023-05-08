<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="http://172.16.10.39/chris-sk-test/img/bivmc_logo.png" style="margin-top: 5px;width:auto;height:40px;padding-left:10px;" alt="">
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <!--<p class="navbar-text navbar-right"><a href="#" class="navbar-link"></a></p>-->
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Home</a></li>
        <li class="dropdown">
          <?php echo $this->Html->link('Users '.$this->Html->tag('i', '', array('class' => 'fas fa-caret-down fa-1x')), array('controller'=>'Students', 'action'=>'index', 'full_base' => true), array('escape'=>false, 'class'=>'dropdown-toggle', 'data-toggle'=>'dropdown', 'href'=>'#')); ?>
          <ul class="dropdown-menu">
          <input class="form-control myInput" id="myInput" type="text" placeholder="Search..">
          <li class="divider"></li>
            <li><?php echo $this->Html->link('List of Users', array('controller'=>'Users', 'action'=>'index', 'full_base' => true)); ?></li>
            <li><?php echo $this->Html->link('Add User', array('controller'=>'Users', 'action'=>'details', 'add')); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <?php echo $this->Html->link('Student '.$this->Html->tag('i', '', array('class' => 'fas fa-caret-down fa-1x')), array('controller'=>'Students', 'action'=>'index', 'full_base' => true), array('escape'=>false, 'class'=>'dropdown-toggle', 'data-toggle'=>'dropdown', 'href'=>'#')); ?>
          <ul class="dropdown-menu">
          <input class="form-control myInput" id="myInput" type="text" placeholder="Search..">
            <li><?php echo $this->Html->link('List of Student', array('controller'=>'Students', 'action'=>'index', 'full_base' => true)); ?></li>
            <li><?php echo $this->Html->link('Add Student', array('controller'=>'Students', 'action'=>'details', 'add')); ?></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fas fa-sign-out-alt fa-lg')).' Logout', array('controller'=>'Users', 'action'=>'logout'), array('escape'=>false, 'class'=>'btn navbar-btn')); ?>
      </ul>
    </div>
  </div>
</nav>
<div class="footer" >
    <div class="row">
		<div class="col-sm-4">
			<span class="fa-stack fa-lg">
				<i class="fab fa-facebook fa-lg"></i>
			</span>
			<span class="fa-stack fa-lg">
				<i class="fab fa-youtube fa-lg"></i>
			</span>
			<span class="fa-stack fa-lg">
				<i class="fab fa-twitter fa-lg"></i>
			</span>
		</div>
		<div class="col-sm-4">
			<h6>&copy; DEMO 2023</h6>
		</div>
	</div>
</div>
<style>
  .myInput { 
    padding: 20px;
    margin: -6px 0px 0px 0px !important;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }
</style>
<script>
  $(".myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  </script>