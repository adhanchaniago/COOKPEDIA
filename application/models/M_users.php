<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


class M_users extends CI_Model{

      function show_users(){

            $hasil=$this->db->query("SELECT * FROM users");

            return $hasil;

      }    

}