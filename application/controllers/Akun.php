<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('akun_model');
		$data['Akun_list'] = $this->akun_model->getDataAkun();
		$this->load->view('akun', $data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('akun_model');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_akun_view');
		}
		else
		{			
			$this->akun_model->insertAkun();
			$this->load->view('tambah_akun_data');
		}
		

	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');



		$this->load->model('akun_model');
		$data['akun'] = $this->akun_model->getAkun($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_akun_view',$data);
		}
		else
		{
			$this->akun_model->updateById($id);
			$this->load->view('edit_akun_data');
		}
	}

	public function deleteData($id)
	{
		$this->load->helper("url");
		$this->load->model("Akun_model");
		$this->Akun_model->delete($id);
		redirect('akun'); //users
	}
}

