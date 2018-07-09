<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Akun_model extends CI_Model
	{
		public function getDataAkun()
		{
			$query = $this->db->get("users");
			return $query->result_array();
		}
		public function insertAkun()
		{
			//$tgl=$this->input->post('pengambilan');
			//$tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$object = array(
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'gender' => $this->input->post('gender'),
				'phone' => $this->input->post('phone'),
				'status' => $this->input->post('status'),
				'photo' => $this->input->post('photo'));
			$this->db->insert('users', $object);
		}

		public function getAkun($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('users');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'gender' => $this->input->post('gender'),
				'phone' => $this->input->post('phone'),
				'status' => $this->input->post('status'),
				'photo' => $this->input->post('photo'));
			
			$this->db->where('id', $id);
			$this->db->update('users', $data);
		}

		/*public function delete($id)
		{ 
        	if ($this->db->delete("data_laundry", "id = ".$id)) { 
            return true; 
        }*/

        public function getAllAkun()
    	{
        	$query = $this->db->get('users');
        	if($query->num_rows()>0){
            return $query->result();
        }
    }

    	public function save()
    	{
        	$data= $this->input->post();
        	$this->db->insert('users', $data);
    	}

    	public function delete($id)
    	{
        	$this->db->where('id', $id);
        	$this->db->delete('users');
    	}

    	public function updateAkun()
    	{
        	$data= $this->input->post();
        	$id= $this->input->post('id');
        	$this->db->where('id', $id);
        	$this->db->update('users',$data);
    	}

   } 


?>