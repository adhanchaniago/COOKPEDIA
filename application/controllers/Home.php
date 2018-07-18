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
        $this->load->model('user');
        $data['value'] = $this->db->where('id', $this->session->userdata('logged_in')['id'])->get('users')->row_array();
        $this->load->view('home', $data);
	}
	public function gridDinamis()
    {
        $this->load->view('GridDinamisView');
    }

    public function getAllAkun()
    {
        $this->load->model('Akun_model');
        $result = $this->Akun_model->getAllAkun(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }
 
    public function addAkun(){
      $this->load->model('Akun_model');
        $this->Akun_model->save();
    }

    public function deleteAkun()
    {
        $this->load->model('Akun_model');
        $id = $this->input->post('id'); 
        $this->Akun_model->delete($id);
    }

     public function updateAkun(){
      $this->load->model('Akun_model');
        $this->Akun_model->updateAkun();
	}
}