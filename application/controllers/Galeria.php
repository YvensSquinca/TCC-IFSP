<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {
	public function index(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');

        
        $this->load->view('galeria/galeria.php');
              

        $this->load->view('common/footer');
	}
}