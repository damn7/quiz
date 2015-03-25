<?php
	class Category extends CI_Model{
		public function get($category_id){
			$query=$this->db->get_where('category',array('category_id'=>$category_id));
			return $query->result();
		}	
	}
?>