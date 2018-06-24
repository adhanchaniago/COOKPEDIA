<?php
class M_grafik extends CI_Model{

	function get_data_stok(){
		$query = $this->db->query("SELECT last_access,SUM(id) AS last_access FROM users GROUP BY last_access");

		if($query->num_rows() > 0){
			foreach($query->result() as $data)
				$hasil[] = $data;
		}
		return $hasil
	}
}