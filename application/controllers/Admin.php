<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
         
	public function index(){
        if ($this->ion_auth->is_admin ())
        {
                $this->load->view('common/header');
                $this->load->view('common/navbar');
       
                $this->load->view('admin/areaadmin');
              
                $this->load->view('common/footer');
        }
        else 
                redirect('index.php/auth/login');
        }
}