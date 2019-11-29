<?php
class Article_model extends CI_Model{
	var $column_order = array(null, 'id_article','title_article','modified_at');//set column field database for datatable orderable
	var $column_search = array('id_article','title_article','modified_at'); //set column field database for datatable searchable 
	var $order = array('id_article' => 'desc'); // default order

	private function _get_datatables_query(){
		$this->db->from('articles');

		$i = 0;
		foreach ($this->column_search as $item) {
			if ($_POST['search']['value']) {
				if ($i===0) {
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}else{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1==$i)
					$this->db->group_end();
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables(){
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_all(){
		$this->db->from('articles');
		return $this->db->count_all_results();
	}

	function count_filtered(){
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function article_add($data){
		$this->db->insert('articles', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	function get_by_id($id){
		$this->db->from('articles');
		$this->db->where('id_article', $id);
		$query = $this->db->get();

		return $query->result_array();
	}

	function article_update($id, $datas){
		$this->db->where('id_article', $id);
		$this->db->update('articles', $datas);
		return $this->db->affected_rows();
	}

	function delete_by_id($id){
		$this->db->where('id_article', $id);
		$this->db->delete('articles');

		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	function select_article(){
		$this->db->from('articles');
		return $this->db->get()->result();
	}
}
?>