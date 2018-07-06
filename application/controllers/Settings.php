<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Settings extends CI_Controller {
 
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
 					redirect('pegawai','refresh');
 				}
 			}
 		}else{
 			redirect('login','refresh');
 		}
 	}

 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$this->load->model('user');
 		$data['userdt'] = $this->user->getDataUser();
 		$this->load->view('settings', $data);
 	}
 	
 	// Pending
 	public function changePassword()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('oldpassword','Old Password','trim|required|callback_cekDb');
 		$this->form_validation->set_rules('newpassword','New Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			echo '<script>alert("Password Lama Salah")</script>';
 			// redirect('Login','refresh');
 		} else {
 			redirect('Home','refresh');
 		}	
 	}
 	
 	public function setUser($id)
 	{
 		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
 		
 		$this->load->model('user');
		$data['dtuser'] = $this->user->getUserbyId($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('setUser_view',$data);
		}
		else
		{	
			$config['upload_path']		= './assets/uploads';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 1000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('photo'))
			{
				//$error = array('error' => $this->upload->display_errors());
				$this->load->view('setUser_view',$data/*, $error*/);
			}

			else
			{
				$this->user->setUserbyId($id);
				//$this->load->view('editUser_view');
				redirect('settings','refresh');

			}
		}		
 		
 	}
 }
 
 /* End of file Settings.php */
 /* Location: ./application/controllers/Settings.php */ ?>