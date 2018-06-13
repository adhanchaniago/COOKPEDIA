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
	 
	 	
	 	public function insert()
	 	{
	 		$data = array(
	 			'username' => $this->input->post('username'),
	 			'email'	=> $this->input->post('email'),
	 			'password' => md5($this->input->post('password')),
	 			'status' => $this->input='user'
	 		);
	 		$this->db->insert('users',$data);
	 	}
	 }

	 
	 /* End of file user.php */
	 /* Location: ./application/models/user.php */ ?>