<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Message_model');
	}

	function sendMessage(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'main_message' => $this->input->post('message')
		);

		$result = $this->Message_model->save_message($data);

		echo json_encode($result);
	}

	function show_notif(){
		$notif = $this->Message_model->getAllNotif();

		echo "<pre>";
		print_r($notif);
		die();
	}
}
