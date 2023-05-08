    <div class="container" style="margin-top: 120px; box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;">
        <center>
        <img src="http://172.16.10.39/chris-sk-test/img/bivmc_logo.png" style="margin-bottom: 10px;width:auto;height:70px;" alt=""></center>
        <?php echo $this->Session->flash();?>
        <?php
            echo $this->Form->create('User');
            echo $this->Form->input('username', array('required', 'label'=>'Username:', 'class'=>'form-control'));
            echo $this->Form->input('password', array('required', 'label'=>'Password:', 'class'=>'form-control'));
            echo $this->Form->submit('Sign in', array('class'=>'btn'));
        ?><br>
        <div class="form-group">
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
        </div>
        <div class="form-group">
            <div class="col-md-12 control" style="padding: 0px;">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:80%">
                        Don't have an account? <br>
                    <a href="#">
                        Contact <strong>Administrator</strong>.
                    </a>
                </div>
            </div>
        </div>    
    </div>

<style>
	input, button, h3, label, .message{
		font-family: Quicksand, san-serif !important;
	}
    h3{text-transform: uppercase;}
    .container {padding: 20px; background-color: white; width: 30%; border-radius: 15px;}
    input[type=text], input[type=password] {width: 100%; padding: 15px; margin: 5px 0 8px 0; display: inline-block; border: none; background: #f1f1f1;}
    input[type=text]:focus, input[type=password]:focus {background-color: #ddd; outline: none;}
    .btn {background-color: #04AA6D; color: white; padding: 16px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; opacity: 0.9;}
    .btn:hover {opacity: 1;}
    @media (max-width: 768px){.container {padding: 20px; background-color: white; width: 70%; border-radius: 20px;}}

</style>
