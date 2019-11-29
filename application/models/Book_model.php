<?php

/**
 * 
 */
class Book_model extends CI_Model
{
	//var $table = 'books';

	public function book_add($data){
		$this->db->insert('books', $data);
		return $this->db->insert_id();
	}

	function get_all_books(){
		$this->db->from('books');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_by_id($id){
		$this->db->from('books');
		$this->db->where('book_id', $id);
		$query = $this->db->get();

		return $query->row();
	}

	function book_update($id, $data){
		$this->db->where('book_id', $id);
		$this->db->update('books', $data);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id){
		$this->db->where('book_id', $id);
		$this->db->delete('books');
	}
}