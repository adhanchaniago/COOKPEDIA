<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class About extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		if($this->session->userdata('logged_in')){
 			$session_data = $this->session->userdata('logged_in');
 			$data['username'] = $session_data['username'];
 			$data['status'] = $session_data['status'];
 			$current_controller = $this->router->fetch_class();
 			$this->load->library('acl');
 			if (! $this->acl->is_public($current_controller))
 			{
 				if (! $this->acl->is_allowed($current_controller, $data['status']))
 				{
 					echo '<script>alert("Anda Tidak Memiliki Hak Akses")</script>';
 					redirect('login','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}

 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$data['username']=$session_data['username'];
 		$this->load->model('user');
 		$data['value'] = $this->db->where('id', $this->session->userdata('logged_in')['id'])->get('users')->row_array();
 		$this->load->view('about',$data);
 	}
 
 }
 
 /* End of file About.php */
 /* Location: ./application/controllers/About.php */ ?>