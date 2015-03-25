<?php
	class Users extends CI_Model{

		private function insert($data){
			$this->db->insert('users',$data);
		}

		public function login($data){
			$query=$this->db->get_where('users',array('uname'=>$data['uname']));
			if($query->num_rows()==0){
				$this->insert($data);
				return true;
			}
			else{
				$row=$query->row();
				if($row->firstname==$data['firstname']&&$row->lastname==$data['lastname'])
					return true;
				else
					return false;
			}
		}

		public function update(){
			$this->db->update('users',array('total_score'=>$this->session->userdata('session_score')),array('uname'=>$this->session->userdata('uname')));
		}

		public function get(){
			$this->db->select('uname, total_score')->from('users')->order_by('total_score','desc')->limit(10);
			$query=$this->db->get();
			return $query->result_array();
		}

		public function read_user_information($data){
				$query=$this->db->get_where('users',array('uname'=>$data['uname']));
				if($query->num_rows()==1)
					return $query->row();
				else
					return false;
		}

	}
?>