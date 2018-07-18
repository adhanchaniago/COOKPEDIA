
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Grafik extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_grafik'); //new
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
 		$x['data']=$this->M_grafik->get_data_stok();
 		$this->load->model('user');
        $x['value'] = $this->db->where('id', $this->session->userdata('logged_in')['id'])->get('users')->row_array();
        $this->load->view('v_grafik',$x);
 	}
 
 }
 
 /* End of file Settings.php */
 /* Location: ./application/controllers/Settings.php */ ?>