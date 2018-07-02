<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

      function __construct(){

            parent::__construct();

            $this->load->model('m_users');

      }

     

      public function index(){

            $x['data']=$this->m_users->show_users();

            $this->load->view('v_users',$x);

      }

}