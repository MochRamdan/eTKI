<?php
Class Auth extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		//load model here
		$this->load->model('User_model');
	}

	function check_login(){
		$data = array(
			'name_user' => htmlspecialchars($_POST['name']),
			'password_user' => htmlspecialchars($_POST['pwd'])
		);

    $res=$this->User_model->islogin($data);  
    if($res){     
        $this->session->set_userdata('id',$data['name_user']);   
      echo base_url()."index.php/Product";  
    }  
    else{  
       echo 0;  
    }
	}

	public function logout(){
		$this->session->unset_userdata('id');
		redirect('index.php/Welcome');
	}
}
?>