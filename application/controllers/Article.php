<?php 
	Class Article extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			if($this->session->userdata('id') != TRUE ){
        redirect("index.php/Welcome/login_page");
      }

			$this->load->model('Article_model');
		}

		function index(){
			$this->load->view('admin/header_adm');
			$this->load->view('Article/article_view');
		}

		function add(){
			$this->load->view('admin/header_adm');
			$this->load->view('Article/article_form');
		}

		function ajax_add(){
			$datas = array(
				'title_article' => $this->input->post('title'),
				'article' => $this->input->post('mainArticle'),
				'modified_at' => date('Y-m-d h:i:sa')
			);

			$result = $this->Article_model->article_add($datas);

			echo json_encode($result);
		}

		function ajax_list(){
			$list = $this->Article_model->get_datatables();
			$data = array();
      $no = $_POST['start'];
      $id = "";
      $yey = 1;
      foreach ($list as $u) {
          $row = array();
          $id = $u->id_article;
          $row[] = $yey;
          $row[] = $u->title_article;
          $row[] = $u->modified_at;
          $row[] = "<a href='Article/edit/$id' class='btn btn-xs btn-primary btn-flat' title='edit data'><i class='fa fa-edit'></i></a><button class='btn btn-xs btn-danger btn-flat' style='margin-left: 3px;' data-toggle='tooltip' data-placement='top' title='delete data' onclick=\"hapus('".$id."')\"><i class='fa fa-trash'></i></button>";
          $data[] = $row;
          $yey = $yey+1;
      }

      $output = array(
      	"draw" => $_POST['draw'],
      	"recordsTotal" => $this->Article_model->count_all(),
      	"recordsFiltered" => $this->Article_model->count_filtered(),
      	"data" => $data,
      );
      //output to json format
      echo json_encode($output);
		}

		//not succsessfully learn again
		// function ajax_edit($id){
		// 	$data = $this->Article_model->get_by_id($id);

		// 	echo json_encode($data);
		// }

		function edit($id){
			$data['result'] = $this->Article_model->get_by_id($id);

			$this->load->view('admin/header_adm');
			$this->load->view('Article/article_edit', $data);
		}

		function ajax_update(){
			$id = $this->input->post('id');

			$datas = array(
				'title_article' => $this->input->post('title'),
				'article' => $this->input->post('mainArticle'),
				'modified_at' => date('Y-m-d h:i:sa')
			);

			$result = $this->Article_model->article_update($id, $datas);
			$msg['success'] = false;
			$msg['type'] = 'update';
			if($result){
				$msg['success'] = true;
			}

			echo json_encode($msg);
		}

		function article_delete(){
			$id = $this->uri->segment(3);
			$result = $this->Article_model->delete_by_id($id);
			$msg['success'] = false;
			if($result){
				$msg['success'] = true;
			}
			echo json_encode($msg);
		}

	}
?>