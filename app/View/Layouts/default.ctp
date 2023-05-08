<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		/*echo $this->Html->meta('icon');
		echo $this->Html->css('system');
		echo $this->Html->css('bootstrap4');
		echo $this->Html->css('jquery.timepicker');
		echo $this->Html->css('select2');
		echo $this->Html->css('open-iconic-bootstrap');
		echo $this->Html->css('ui-lightness/jquery-ui-1.10.3.custom.css');
		echo $this->Html->css('animate.css');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->script('jquery');
		echo $this->Html->script('system');
		echo $this->Html->script('jquery.timepicker');
		echo $this->Html->script('jquery-ui-1.10.3.custom.js');
		echo $this->Html->script('bootstrap4.bundle');
		echo $this->Html->script('select2.full');
		echo $this->Html->script('jquery.min.js');//*/
		echo $this->Html->meta('icon');
		//echo $this->Html->script('https://kit.fontawesome.com/a076d05399.js');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
		echo $this->Html->script('https://code.jquery.com/jquery-1.12.4.min.js');
		//DATA TABLES
		echo $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js');
		echo $this->Html->script('https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js');
		echo $this->Html->script('https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap.min.js');
		echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		echo $this->Html->css('https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap.min.css');
		//echo $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css');
		//FONT AWESOME
		echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
		echo $this->Html->css('https://fonts.googleapis.com');
		echo $this->Html->css('https://fonts.gstatic.com');
		echo $this->Html->css('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		date_default_timezone_set('Asia/Manila'); 
	?>
</head>
<body id="pagebody">
<div><?php echo $this->fetch('content'); ?></div>
<style>
	.container-rev{
		background-color: white !important;
		padding: 15px 15px 15px 15px;
		position: relative;
		background-color: white;
		margin-top: 0px;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 60px;
		width: 95%;
		min-height: 100%;
		overflow: hidden;
		box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
	}
	#pagebody {
		padding: 0px 0px 0px 0px;
		margin: 0px 0px 0px 0px;
		background-color: rgb(235, 235, 235);
	}
	.navbar {
		margin-bottom: 0px;
	}
	#user_filter{display: none;}
	.footer{
		z-index: 5; 
		position: fixed; 
		padding: 5px; 
		left: 0; 
		bottom: 0; 
		height: auto; 
		width: 100%; 
		background-color: gray; 
		color: white; 
		text-align: center;
	}
</style>
</body>
</html>
