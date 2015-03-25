<!DOCTYPE html>
<html>
	<head>
		<title>Platform</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/platform_style.css');?>">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
			var i=-1,score=0;
			/*$(document).ready(function(){
			$(".start").hide();
			$(".b").hide();
			});*/
			function show_ques(correct){
				if(i>=0){
					var user_option=parseInt($("input[name=radio]:checked").val());
					if(user_option===correct){
						score=score+10;
						$('#right').fadeIn(500);
						$('#right').fadeOut(500);
						//alert("score increased");
					}
					else{
						$('#wrong').fadeIn(500);
						$('#wrong').fadeOut(500);
						//alert("score not increased");
					}
				}
				$("#"+i).hide();
				$('#bn'+i).fadeOut(900);
				i++;
				$("#"+i).fadeIn(900);
				if(i==10){
					$('h1').append("<p>"+score+"</p>");
					$("#display a").href+='/'+score;
					var $a = $('a[name="points"]');
					
					$a.data('href', $a.attr('href'));
					$a.attr('href', $a.data('href') + '/' + score);
					
				}
			}
			function show_but(){
				$('#bn'+i).fadeIn(900);
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="display" id="-1">
			<div>
			<h1><?php echo strtoupper($category[0]->category_name);?></h1>
			<h1>Welcome. Click button to start</h1>
			</div>

			<div class="startbn" id="bn-1" name="qwerty" onclick="show_ques()">
				START
			</div>
			</div>

			<div class="start" id="0">
					
						<div class="questions">
							<h3>
							<?php echo $ques[0]->question_name;?>
							</h3>
						</div>
						<div class="radios">
						<form>

									<div class="option">
									<input type="radio" name="radio" value="1" id="r01" onclick="show_but()">
									<label class="radio" for="r01">A. <?php echo $ques[0]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r02" onclick="show_but()">
									<label class="radio" for="r02">B. <?php echo $ques[0]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r03" onclick="show_but()">
									<label class="radio" for="r03">C. <?php echo $ques[0]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r04" onclick="show_but()">
									<label class="radio" for="r04">D. <?php echo $ques[0]->option_4;?></label>
									</div>
						</form>	
						</div>
					
			</div>
			<div class="b" id="bn0" onclick="show_ques(<?php echo $ques[0]->correct_option;?>)">
			NEXT
			</div>
			

			<div class="start" id="1">
					
						<div class="questions">
							<h3>
							<?php echo $ques[1]->question_name;?>
							</h3>
						</div>
						<div class="radios">
						<form>

									<div class="option">
									<input type="radio" name="radio" value="1" id="r11" onclick="show_but()">
									<label class="radio" for="r11">A. <?php echo $ques[1]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r12" onclick="show_but()">
									<label class="radio" for="r12">B. <?php echo $ques[1]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r13" onclick="show_but()">
									<label class="radio" for="r13">C. <?php echo $ques[1]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r14" onclick="show_but()">
									<label class="radio" for="r14">D. <?php echo $ques[1]->option_4;?></label>
									</div>
						</form>
						</div>
					
				</div>
				<div class="b" id="bn1" onclick="show_ques(<?php echo $ques[1]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="2">
					
						<div class="questions">
							<h3>
							<?php echo $ques[2]->question_name;?>
							</h3>
						</div>
						<div class="radios">
						<form>

									<div class="option">
									<input type="radio" name="radio" value="1" id="r21" onclick="show_but()">
									<label class="radio" for="r21">A. <?php echo $ques[2]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r22" onclick="show_but()">
									<label class="radio" for="r22">B. <?php echo $ques[2]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r23" onclick="show_but()">
									<label class="radio" for="r23">C. <?php echo $ques[2]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r24" onclick="show_but()">
									<label class="radio" for="r24">D. <?php echo $ques[2]->option_4;?></label>
									</div>
						</form>
						</div>
				
				</div>
				<div class="b" id="bn2" onclick="show_ques(<?php echo $ques[2]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="3">
					
						<div class="questions">
							<h3>
							<?php echo $ques[3]->question_name;?>
							</h3>
						</div>
						<div class="radios">
						<form>

									<div class="option">
									<input type="radio" name="radio" value="1" id="r31" onclick="show_but()">
									<label class="radio" for="r31">A. <?php echo $ques[3]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r32" onclick="show_but()">
									<label class="radio" for="r32">B. <?php echo $ques[3]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r33" onclick="show_but()">
									<label class="radio" for="r33">C. <?php echo $ques[3]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r34" onclick="show_but()">
									<label class="radio" for="r34">D. <?php echo $ques[3]->option_4;?></label>
									</div>
						</form>
						</div>
					
				</div>
				<div class="b" id="bn3" onclick="show_ques(<?php echo $ques[3]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="4">
	
						<div class="questions">
							<h3>
							<?php echo $ques[4]->question_name;?>
							</h3>
						</div>
						<div class="radios">

									<div class="option">
									<input type="radio" name="radio" value="1" id="r41" onclick="show_but()">
									<label class="radio" for="r41">A. <?php echo $ques[4]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r42" onclick="show_but()">
									<label class="radio" for="r42">B. <?php echo $ques[4]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r43" onclick="show_but()">
									<label class="radio" for="r43">C. <?php echo $ques[4]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r44" onclick="show_but()">
									<label class="radio" for="r44">D. <?php echo $ques[4]->option_4;?></label>
									</div>
							
						</div>
				</div>
				<div class="b" id="bn4" onclick="show_ques(<?php echo $ques[4]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="5">
					
						<div class="questions">
							<h3>
							<?php echo $ques[5]->question_name;?>
							</h3>
						</div>
						<div class="radios">

									<div class="option">
									<input type="radio" name="radio" value="1" id="r51" onclick="show_but()">
									<label class="radio" for="r51">A. <?php echo $ques[5]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r52" onclick="show_but()">
									<label class="radio" for="r52">B. <?php echo $ques[5]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r53" onclick="show_but()">
									<label class="radio" for="r53">C. <?php echo $ques[5]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r54" onclick="show_but()">
									<label class="radio" for="r54">D. <?php echo $ques[5]->option_4;?></label>
									</div>
							
						</div>
					
				</div>
				<div class="b" id="bn5" onclick="show_ques(<?php echo $ques[5]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="6">
					
						<div class="questions">
							<h3>
							<?php echo $ques[6]->question_name;?>
							</h3>
						</div>
						<div class="radios">

									<div class="option">
									<input type="radio" name="radio" value="1" id="r61" onclick="show_but()">
									<label class="radio" for="r61">A. <?php echo $ques[6]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r62" onclick="show_but()">
									<label class="radio" for="r62">B. <?php echo $ques[6]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r63" onclick="show_but()">
									<label class="radio" for="r63">C. <?php echo $ques[6]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r64" onclick="show_but()">
									<label class="radio" for="r64">D. <?php echo $ques[6]->option_4;?></label>
									</div>
							
						</div>
					
				</div>
				<div class="b" id="bn6" onclick="show_ques(<?php echo $ques[6]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="7">
					
						<div class="questions">
							<h3>
							<?php echo $ques[7]->question_name;?>
							</h3>
						</div>
						<div class="radios">

									<div class="option">
									<input type="radio" name="radio" value="1" id="r71" onclick="show_but()">
									<label class="radio" for="r71">A. <?php echo $ques[7]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r72" onclick="show_but()">
									<label class="radio" for="r72">B. <?php echo $ques[7]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r73" onclick="show_but()">
									<label class="radio" for="r73">C. <?php echo $ques[7]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r74" onclick="show_but()">
									<label class="radio" for="r74">D. <?php echo $ques[7]->option_4;?></label>
									</div>
							
						</div>
					
				</div>
				<div class="b" id="bn7" onclick="show_ques(<?php echo $ques[7]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="8">

						<div class="questions">
							<h3>
							<?php echo $ques[8]->question_name;?>
							</h3>
						</div>
						<div class="radios">

									<div class="option">
									<input type="radio" name="radio" value="1" id="r81" onclick="show_but()">
									<label class="radio" for="r81">A. <?php echo $ques[8]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r82" onclick="show_but()">
									<label class="radio" for="r82">B. <?php echo $ques[8]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r83" onclick="show_but()">
									<label class="radio" for="r83">C. <?php echo $ques[8]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r84" onclick="show_but()">
									<label class="radio" for="r84">D. <?php echo $ques[8]->option_4;?></label>
									</div>
							
						</div>
				
				</div>
				<div class="b" id="bn8" onclick="show_ques(<?php echo $ques[8]->correct_option;?>)">
				NEXT
				</div>

			<div class="start" id="9">
					
						<div class="questions">
							<h3>
							<?php echo $ques[9]->question_name;?>
							</h3>
						</div>
						<div class="radios">

									<div class="option">
									<input type="radio" name="radio" value="1" id="r91" onclick="show_but()">
									<label class="radio" for="r91">A. <?php echo $ques[9]->option_1;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="2" id="r92" onclick="show_but()">
									<label class="radio" for="r92">B. <?php echo $ques[9]->option_2;?></label>
									</div>
								
									<div class="option">
									<input type="radio" name="radio" value="3" id="r93" onclick="show_but()">
									<label class="radio" for="r93">C. <?php echo $ques[9]->option_3;?></label>
									</div>

									<div class="option">
									<input type="radio" name="radio" value="4" id="r94" onclick="show_but()">
									<label class="radio" for="r94">D. <?php echo $ques[9]->option_4;?></label>
									</div>
							
						</div>
				
				</div>
				<div class="b" id="bn9" onclick="show_ques(<?php echo $ques[9]->correct_option;?>)">
				NEXT
				</div>

				<div class="start" id="10">
					<div class="display">
						<h1>TOTAL SCORE</h1>
						<a name="points" href="<?php echo site_url('quiz/set_score').'/'.$ques[0]->category_id.'/';?>">
						<div class="startbn">
						HOME
						</div>
						</a>
					</div>
				</div>

		
	</div>
	<div class="judge" id="right">
	+10
	</div>
	<div class="judge" id="wrong">
	+0
	</div>
	</body>
</html>


