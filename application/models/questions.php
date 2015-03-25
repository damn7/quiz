<?php
	class Questions extends CI_Model{
		const DB_TABLE='questions';
		const DB_TABLE_PK='question_id';
		public $question_id;
		public $category_id;
		public $question_name;
		public $option_1;
		public $option_2;
		public $option_3;
		public $option_4;
		public $correct_option;

		public function get($category_id){
			$this->db->select('*')->from('questions')->where('category_id',$category_id)->order_by('question_id','random')->limit(10);
			$query=$this->db->get();
			if($query->num_rows()==10)
				return $query->result();
			else
				return false;
		}
	}
?>