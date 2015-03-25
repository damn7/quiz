<!DOCTYPE html>
<html>
<head>
	<title>The Entrar-shadow Website form | w3layouts</title>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>QUIZ</h1>
					<div class="head">
						<img src="<?php echo base_url('assets/images/q.png');?>" alt=""/>
					</div>
					<?php echo validation_errors();?>
					<?php echo $error_message;?>
				<?php echo form_open();?>
						<input type="text" class="text" name="firstname" placeholder="FIRSTNAME" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'FIRSTNAME';}" >
						<input type="text" class="text" name="lastname" placeholder="LASTNAME" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'LASTNAME';}" >
						<input type="text" class="text" name="uname" placeholder="USERNAME" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'USERNAME';}" >
						<div class="submit">
							<input type="submit" onclick="myFunction()" value="ENTER" >
					</div>	
				<?php echo form_close();?>
			</div>
			<!--//End-login-form-->
		</div>
			 <!-----//end-main---->
	
		 		
</body>
</html>