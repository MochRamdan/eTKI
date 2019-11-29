<?php
	class Product extends CI_Controller
	{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('id') != TRUE ){
		redirect("index.php/Welcome/login_page");
	  }
			$this->load->model('Product_model');
		}

		function index(){
			$this->load->view('admin/header_adm');
			$this->load->view('Product/product_view');
		}

		function showAllProduct(){
			$result = $this->Product_model->get_all_products();

			echo json_encode($result);
		}

		function ajax_list(){
			$list = $this->Product_model->get_datatables();

		$data = array();
		$no = $_POST['start'];
		$id = "";
		$yey = 1;
		foreach ($list as $u) {
			if ($u->image == true) {
				$status = "<small class='label pull-left bg-green'>avaliable</small>";
			}else{
				$status = "<small class='label pull-left bg-red'>not avaliable</small>";
			}
			$row = array();
			$id = $u->id_product;
			$row[] = $yey;
			$row[] = $u->name_product;
			$row[] = $u->stock;
			$row[] = $u->unit;
			$row[] = $u->price;
			$row[] = $status;
			$row[] = "<button class='btn btn-xs btn-primary btn-flat' data-toggle='tooltip' data-placement='top' title='edit data' onclick=\"edit('".$id."')\"><i class='fa fa-edit'></i></button> <button class='btn btn-xs btn-success btn-flat' data-toggle='tooltip' data-placement='top' title='upload file' onclick=\"upload('".$id."')\"><i class='fa fa-upload'></i></button> ";
			$data[] = $row;
			$yey = $yey+1;
		}
 
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Product_model->count_all(),
			"recordsFiltered" => $this->Product_model->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
		}

		function product_add(){
			$data = array(
				'name_product' => $this->input->post('name_product'),
				'stock' => $this->input->post('stock'),
				'unit' => $this->input->post('unit'),
				'price' => $this->input->post('price')
			);

			$result = $this->Product_model->product_add($data);
			$msg['success'] = false;
			$msg['type'] = 'add';
			if ($result) {
				$msg['success'] = true;
			}

			echo json_encode($msg);
		}

		function ajax_edit($id){
			$data = $this->Product_model->get_by_id($id);

				echo json_encode($data);
		}

		function product_update(){
			$id = $this->input->post('id_product');
			$data = array(
				'name_product' => $this->input->post('name_product'),
				'stock' => $this->input->post('stock'),
				'unit' => $this->input->post('unit'),
				'price' => $this->input->post('price')
			);

			$result = $this->Product_model->product_update($id, $data);
			$msg['success'] = false;
			$msg['type'] = 'update';
			if($result){
				$msg['success'] = true;
			}

			echo json_encode($msg);
		}

		function save_image(){
			$id = $this->input->post('id_product');
			$config['upload_path']="./assets/img/products";
	  $config['allowed_types']='gif|jpg|png';
	  $config['encrypt_name'] = TRUE;
	   
	  $this->load->library('upload', $config);
	  if($this->upload->do_upload("image")){
		  // $data = array('upload_data' => $this->upload->data());
		$upload_data = $this->upload->data();

		  $datas = array(
			'id_product' => $id,
			// 'path' => $data['upload_data']['file_name'],
			'path' => $upload_data['file_name'],
			'description' => $this->input->post('description')); 
		   
		  $result = $this->Product_model->save_image($datas);
		  //add status after add image
		  $status = $this->add_status($id);

		  if (($result == true)&&($status == true)) {
				$data = true;
		  }

		  echo json_encode($data);
	  }else{
		$data = $this->upload->display_errors();

		echo json_encode($data);
		//$data['stat'] = 0;
	  }
		}

		function add_status($id){
			$status = true;
			$data = $this->Product_model->get_data($id);

			$datas = array(
				'name_product' => $data['name_product'],
				'stock' => $data['stock'],
				'unit' => $data['unit'],
				'price' => $data['price'],
				'image' => $status
			);

			$result = $this->Product_model->add_status($id, $datas);

			return $result;
		}

		public function upload_image(){
			//if (isset($_FILES["image"])) {
				$extension = explode('.', $_FILES['image']['name']);
				$new_name = rand().'.'.$extension[1];
				$destination = './assets/img/products'.$new_name;
				$move_uploaded_file($_FILES['image']['tmp_name'], $destination);
				return $new_name;
			//}
		}
}