<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe extends CI_Controller {

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
		$this->load->model('user');
        $data['value'] = $this->db->where('id', $this->session->userdata('logged_in')['id'])->get('users')->row_array();
		$this->load->view('setRecipe_view',$data);
	}

	public function getRecipebyId($id)
	{
		$this->load->model('user');
        $data['value'] = $this->db->where('id', $this->session->userdata('logged_in')['id'])->get('users')->row_array();
        $data['recipe'] = $this->db->where('id', $id)->get('recipes')->row_array();
		$this->load->view('getRecipe_view',$data);
	}

	public function setRecipe()
	{
		$this->load->library('form_validation');
		$this->load->model('user');

 		$this->form_validation->set_rules('title','title','trim|required');
 		$this->form_validation->set_rules('descripction','descripction','trim|required');
 		$this->form_validation->set_rules('portion','portion','trim|required');
 		$this->form_validation->set_rules('duration','duration','trim|required');
 		$this->form_validation->set_rules('steps','steps','trim|required');
 		$this->form_validation->set_rules('ingredients','ingredients','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('setRecipe_view.php');
 		} 
 		else {
 			$config['upload_path']		= './assets/uploads';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 1000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('photo')) {
				//$error = array('error' => $this->upload->display_errors());
				$this->load->view('setRecipe_view.php',$data/*, $error*/);
			}
			else {
				$this->user->insertRecipe();
 				redirect('Home','refresh');
			}	
 		}
	}


	
}
