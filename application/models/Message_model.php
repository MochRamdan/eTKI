<?php
class Message_model extends CI_Model
{
	public function save_message($data)
	{
		$this->db->insert('messages', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	function getAllNotif($status=0){
		$this->db->from('messages');
		$this->db->where('status', $status);

		return $this->db->get()->row();
	}
}
?>