<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
 			$data['status'] = $session_data['status'];
 			if(!$session_data['username']){
 				redirect('login','refresh');
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}
	public function index()
	{
		$this->load->view('home.php');
	}
	
}
