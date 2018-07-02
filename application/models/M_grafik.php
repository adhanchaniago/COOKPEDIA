<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class M_grafik extends CI_Model{

	public function get_data_stok(){
		$query = $this->db->query("SELECT username,SUM(total_access) AS total_access FROM users GROUP BY username");

		if($query->num_rows() > 0){
			foreach($query->result() as $data)
				$hasil[] = $data;
		}
		return $hasil;
	}
}