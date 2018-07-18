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
 			if(!$session_data['username']){
 				redirect('login','refresh');
 			}
 			// $current_controller = $this->router->fetch_class();
 			// $this->load->library('acl');
 			// if (! $this->acl->is_public($current_controller))
 			// {
 			// 	if (! $this->acl->is_allowed($current_controller, $data['status']))
 			// 	{
 			// 		redirect('pegawai','refresh');
 			// 	}
 			// }
 		}else{
 			redirect('login','refresh');
 		}
 	}
 				
 	public function Index()
 	{
 		$session_data=$this->session->userdata('logged_in');
 		$this->load->model('user');
 		$data['value'] = $this->db->where('id', $this->session->userdata('logged_in')['id'])->get('users')->row_array();
 		$this->load->view('settings', $data);
 	}

 	public function changePassword()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('old_password','Old Password','trim|required');
 		$this->form_validation->set_rules('new_password','New Password','trim|required');
 		$this->form_validation->set_rules('confirm_new_password','New Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->session->set_flashdata('error', validation_errors());
 		} else {
 			if($this->input->post('new_password')==$this->input->post('confirm_new_password')){
	 			$checkOldPass = $this->db->where('password',md5($this->input->post('old_password')))->get('users')->num_rows();
	 			if($checkOldPass==0){
	 				$this->session->set_flashdata('error', 'Password lama tidak sesuai');
	 			}else{
	 				$data = array(
	 					'password' => md5($this->input->post('new_password')),
	 				);
	 				$this->db->where('id',$this->input->post('id_user'))->set($data)->update('users');
	 				$this->session->set_flashdata('success', 'Password berhasil dirubah');
	 			}
 			}else{
	 			$this->session->set_flashdata('error', 'Konfirmasi password baru tidak sesuai');
 			}
 		}	
 		redirect(site_url().'/settings');
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
				redirect('settings','refresh');

			}
		}		
 		
 	}

 	public function deleteRecipe($id)
	{
		$this->load->helper("url");
		$this->load->model("user");
		$this->user->deleteRecipe($id);
		redirect('settings');
	}

 }
 
 /* End of file Settings.php */
 /* Location: ./application/controllers/Settings.php */ ?>