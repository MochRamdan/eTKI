<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Product_model');
		$this->load->model('Article_model');
	}

	public function index()
	{
		$datas['products'] = $this->Product_model->select_join();
		$this->load->view('header');
		$this->load->view('Welcome/shop', $datas);
		$this->load->view('footer');
	}

	function contact_page(){
		$this->load->view('header');
		$this->load->view('Welcome/contact');
		$this->load->view('footer');
	}

	function article_page(){
		$data['articles'] = $this->Article_model->select_article();

		$this->load->view('header');
		$this->load->view('Welcome/article',$data);
		$this->load->view('footer');
	}

	function login_page(){
		$this->load->view('header');
		$this->load->view('Welcome/login');
		//$this->load->view('footer');
	}
}
