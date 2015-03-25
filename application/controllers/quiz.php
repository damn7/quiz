<?php
session_start();
	class Quiz extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model(array('questions','users','category'));
			$this->load->helper('form');
			$this->load->library('table');
		}
		



		public function index(){
			if(!$this->session->userdata('logged_in')){
			
				$this->load->library('form_validation');

				$this->form_validation->set_rules('firstname','First Name','trim|required|xss_clean');
				$this->form_validation->set_rules('lastname','Last Name','trim|required|xss_clean');
				$this->form_validation->set_rules('uname','Username','trim|required|xss_clean');

				if($this->form_validation->run()==FALSE){
					$data=array(
						'error_message'=>'');
					$this->load->view('login',$data);
				}
				else{
					$data=array(
						'firstname'=>$this->input->post('firstname'),
						'lastname'=>$this->input->post('lastname'),
						'uname'=>$this->input->post('uname')
						);

					$result=$this->users->login($data);
					if($result==true){
						$session_array=array(
								'firstname'=>$this->input->post('firstname'),
								'lastname'=>$this->input->post('lastname'),
								'uname'=>$this->input->post('uname'),
								'logged_in'=>true,
								'session_score'=>0,
								'categories'=>array(
									'1'=>true,
									'2'=>true,
									'3'=>true,
									'4'=>true,
									'5'=>true,
									'6'=>true,
									'7'=>true,
									'9'=>true,
									'10'=>true,
									)
						);
						$this->session->set_userdata($session_array);
						$row = $this->users->read_user_information($session_array);
					
						if($row!=false){
							$this->session->set_userdata('total_score',$row->total_score);
							$this->load->view('menu');
						}

					
					}
					else{
						$data = array(
								'error_message' => 'Username already exists'
								);
						$this->load->view('login',$data);
					}
				}
			
			}
			else
				$this->load->view('menu');
		}


		public function platform($category_id){
			$data['ques']=$this->questions->get($category_id);
			$data['category']=$this->category->get($category_id);
			if($data['ques']!=false)
				$this->load->view('platform',$data);
			else
				$this->load->view('un');
		}

		function logout()
		{
		    $user_data = $this->session->all_userdata();
		        foreach ($user_data as $key => $value) {
		            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
		                $this->session->unset_userdata($key);
		            }
		        }
		    $this->session->sess_destroy();
		    redirect('quiz');
		}

		public function set_score($cat,$value){
			$score=$this->session->userdata('session_score');
			$c=$this->session->userdata('categories');
			$c[$cat]=false;
			$this->session->set_userdata('categories',$c);
			$score+=$value;
			$this->session->set_userdata('session_score',$score);
			if($score>$this->session->userdata('total_score')){
				$this->users->update();
			}
			redirect('quiz');
		}


		public function leaderboard(){
			$data['leaders']=$this->users->get();
			$this->load->view('leaderboard',$data);
		}
	
	}
?>