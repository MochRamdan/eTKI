<?php
	Class User_model extends CI_Model
	{
		public function islogin($data){  
		  $query = $this->db->get_where('users', $data);  
		  return $query->num_rows();  
		}
	}
?>