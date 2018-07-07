<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {

 	public function index()
 	{
 		$this->load->view('login_view');
 	}
 
 	public function cekLogin()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('email','Email','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');
 		if ($this->form_validation->run() == FALSE) {
 			echo '<script>alert("Email atau Password Salah")</script>';
 			redirect('Login','refresh');
 		} else {
 			redirect('Home','refresh');
 		}
 		
 	}

 	public function register()
 	{
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('email','Email','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('register_view');
 		} else {
 			$this->load->model('user');
 			$this->user->insert();
 			redirect('Login','refresh');
 		}
 	}
 	
 	public function cekDb($password)
 	{
 		$this->load->model('user');
 		$email = $this->input->post('email');
 		$result = $this->user->login($email,$password);
 		if($result){
 			$sess_array = array();
 			foreach ($result as $row) {
 				$sess_array = array(
 					'id' => $row->id,
 					'email' => $row->email,
 					'username' => $row->username,
 					'password' => $row->password,
 					'gender' => $row->gender,
 					'phone' => $row->phone,
 					'status' => $row->status,
 					'photo' => $row->photo,
 					'last_access' => $row->last_access
 				);
 				$this->session->set_userdata('logged_in',$sess_array);
 			}
 			$sesID = $this->session->userdata('logged_in');
 			$total_access = $this->db->select('total_access')->where('id',$sesID['id'])->get('users')->row_array();
 			$data = array (
 				'last_access' => date('Y-m-d H:i:s'),
 				'total_access' => $total_access['total_access']+1
 			);
 			$this->db->where('id',$sesID['id'])->set($data)->update('users');

 			// print_r($return); die();
 			return true;

 		}
 		else{
 			return false;
 		}

 	}

 	public function logout()
 	{
 		$this->session->unset_userdata('logged_in');
 		$this->session->sess_destroy();
 		redirect('login','refresh');
 	}
 
 }
 
 /* End of file Login.php */
 /* Location: ./application/controllers/Login.php */ 
 ?>