<?php
	class Book extends CI_Controller
	{
		public function __construct(){

			parent:: __construct();
			$this->load->model('book_model');
		}

			public function index()
			{
				$data['books'] = $this->book_model->get_all_books();

				$this->load->view('book_view', $data);
			}

			public function book_add()
			{
				$data = array(
					'book_isbn' => $this->input->post('book_isbn'), 
					'book_title' => $this->input->post('book_title'),
					'book_author' => $this->input->post('book_author'),
					'book_category' => $this->input->post('book_category')
				);

				$insert = $this->book_model->book_add($data);
				echo json_encode(array("status" => true));
			}

			function ajax_edit($id){
				$data = $this->book_model->get_by_id($id);
				echo json_encode($data);
			}

			function book_update(){
				$id = $this->input->post('book_id');
				$data = array(
					'book_isbn' => $this->input->post('book_isbn'), 
					'book_title' => $this->input->post('book_title'),
					'book_author' => $this->input->post('book_author'),
					'book_category' => $this->input->post('book_category')
				);

				$this->book_model->book_update($id, $data);

				echo json_encode(array("status" => TRUE));
			}

			function book_delete($id){
				$this->book_model->delete_by_id($id);
				echo json_encode(array("status" => TRUE));
			}
	}