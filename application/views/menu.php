<!DOCTYPE html>
<!--
a->4
b->3
c->1
d->6
e->7
f->2
g->5
h->9
i->10
-->
<html>
	<head>
		<title>Menu</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/menu_style.css');?>">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				
				$('#category_4').animate({top:'+=700'},'slow');
				$('#category_3').animate({top:'+=700',left:'+=700'},'slow');
				$('#category_2').animate({top:'+=700',left:'-=700'},'slow');
				$('#category_1').animate({left:'+=710'},'slow');
				$('#category_5').animate({left:'-=700'},'slow');
				$('#category_6').animate({top:'-=700',left:'+=700'},'slow');
				$('#category_7').animate({top:'-=700'},'slow');
				$('#category_9').animate({top:'-=700',left:'-=700'},'slow');
				$('#category_10').animate({top:'-=700'},1300);

				<?php $category=$this->session->userdata('categories');?>
				<?php foreach($category as $key => $value) {
					if(!$value){
						echo '$("#category_'.$key.'"'.').on("click", function(e){
					        e.preventDefault();
					    });';
						echo '$("#category_'.$key.'"'.').css("background-image",'.'"url('.'\''.'../assets/images/check.png'.'\''.')");';


					}
				}?>
			});

			function hila(elem,upar,by,i){
				$(elem).animate({top:'-='+upar,left:'-='+by},'fast');
				$(elem).css("background","#B5E655");
				$('#'+i).show();
			}
			function la(elem,upar,by,i){
				$(elem).animate({top:'+='+upar,left:'+='+by},'fast');
				$(elem).css("background","");
				$('#'+i).hide();
				
			}
		</script>
		

	</head>
	<body>
		<div class="header">
			<div class="brand">
				<h1>QUIZ</h1>
			</div>
			<div class="name">
				<h2><?php echo "HI! ".$this->session->userdata('firstname')." ".$this->session->userdata('lastname');?></h2>
			</div>
			<div class="score">
				<h2><?php echo "TOTAL SCORE ".$this->session->userdata('session_score');?></h2>
			</div>
			<a href="<?php echo site_url('quiz/logout');?>">
			<div class="logout">
				<h2>Logout</h2>
			</div>
			</a>

		</div>
		<a href="<?php echo site_url('quiz/platform/4');?>"><div class="round" id="category_4" onmouseover="hila(this,10,0,1)" onmouseout="la(this,10,0,1)">
		<h5 class="hid" id='1'>MOVIES</h5></div></a>

		<a href="<?php echo site_url('quiz/platform/3');?>">
		<div class="round" id="category_3" onmouseover="hila(this,10,10,2)" onmouseout="la(this,10,10,2)"><h5 class="hid" id='2'>COMPUTER</h5>
		</div>
		</a>

		<a href="<?php echo site_url('quiz/platform/1');?>">
		<div class="round" id="category_1" onmouseover="hila(this,0,10,3)" onmouseout="la(this,0,10,3)"><h5 class="hid" id='3'>ART</h5>
		</div>
		</a>

		<a>
		<div class="round" id="category_6" onmouseover="hila(this,-10,10,4)" onmouseout="la(this,-10,10,4)"><h5 class="hid" id='4'>GEOGRAPHY</h5>
		</div>
		</a>

		<a>
		<div class="round" id="category_7" onmouseover="hila(this,-10,0,5)" onmouseout="la(this,-10,0,5)"><h5 class="hid" id='5'>HISTORY</h5>
		</div>
		</a>

		<a href="<?php echo site_url('quiz/platform/2');?>">
		<div class="round" id="category_2" onmouseover="hila(this,10,-10,6)" onmouseout="la(this,10,-10,6)"><h5 class="hid" id='6'>BUSINESS</h5>
		</div>
		</a>

		<a href="<?php echo site_url('quiz/platform/5');?>">
		<div class="round" id="category_5" onmouseover="hila(this,0,-10,7)" onmouseout="la(this,0,-10,7)"><h5 class="hid" id='7'>GK</h5></div>
		</a>

		<a>
		<div class="round" id="category_9" onmouseover="hila(this,-10,-10,8)" onmouseout="la(this,-10,-10,8)"><h5 class="hid" id='8'>SCIENCE</h5>
		</div>
		</a>

		<a>
		<div class="round" id="category_10" onmouseover="hila(this,-10,-10,9)" onmouseout="la(this,-10,-10,9)"><h5 class="hid" id='9'>SPORTS</h5>
		</div>
		</a>

		<a href="<?php echo site_url('quiz/leaderboard');?>">
		<div class="round1" id="lead"></div>
		</a>
		

		
	</body>
</html>