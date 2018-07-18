 <?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class User extends CI_Model
	 {
	 	// $this->db->where('username', $username);
   //    	$query = $this->db->get($this->table)->row();
	 	public function login($email,$password)
	 	{
	 		$this->db->select('*');
	 		$this->db->from('users');
	 		$this->db->where('email',$email);
	 		$this->db->where('password', MD5($password));
	 		$query = $this->db->get();
	 		if($query->num_rows()==1){
	 			return $query->result();
	 		}else{
	 			return false;
	 		}
	 		
	 	}
	 
	 	public function getDataUser()
		{
			$query = $this->db->get("Users");
			return $query->result_array();
		}


	 	public function insert()
	 	{
	 		$data = array(
	 			'username' 	=> $this->input->post('username'),
	 			'email'		=> $this->input->post('email'),
	 			'password'	=> md5($this->input->post('password')),
	 			'status' 	=> $this->input='user'
	 		);
	 		$this->db->insert('users',$data);
	 	}

		public function getUserbyId($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('users');
			return $query->result();
		}

	 	public function setUserbyId($id)
		{
			$data = array(
				'username' 	=> $this->input->post('username'),
				'email' 	=> $this->input->post('email'),
				'gender' 	=> $this->input->post('gender'),
				'phone' 	=> $this->input->post('phone'),
				'photo' 	=> $this->upload->data('file_name'),

			);
			$this->db->where('id', $id);
			$this->db->update('users', $data);
		}

		public function insertRecipe()
	 	{
	 		$data = array(

	 			'title' 		=> $this->input->post('title'),
	 			'author'		=> $this->input->post('author'),
	 			'descripction'	=> $this->input->post('descripction'),
	 			'portion'		=> $this->input->post('portion'),
	 			'duration'		=> $this->input->post('duration'),
	 			'steps'			=> $this->input->post('steps'),
	 			'ingredients'	=> $this->input->post('ingredients'),
	 			'photo' 		=> $this->upload->data('file_name'),

	 			// 'status' 	=> $this->input='user'
	 		);
	 		$this->db->insert('recipes',$data);
	 	}

	 	public function getRecipebyId($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('recipes');
			return $query->result();
		}

		public function deleteRecipe($id)
		{ 
        	if ($this->db->delete("recipes", "id = ".$id)) { 
            return true; 
        	}
    	}
	 	
	 }

	 	// public function editUser()
	 	// {
	 	// 	$id=$this->input->post('id');

	 	// 	$data = array(
	 	// 		'username' => $this->input->post('username'),
	 	// 		'email' => $this->input->post('email')
	 	// 	);
	 	// 	$this->db->where('id', $id);
	 	// 	$this->db->update('users',$data);
	 	// }
	 
	 /* End of file user.php */
	 /* Location: ./application/models/user.php */ ?>