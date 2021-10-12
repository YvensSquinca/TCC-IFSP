<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function index(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');

        $this->load->view('paginainicial/fotologo');
        $this->load->view('paginainicial/integrantes');
        $this->load->view('paginainicial/fazemos');
        $this->load->view('paginainicial/testemunhos');
        $this->load->view('paginainicial/carrosel');
        $this->load->view('paginainicial/contato');

        $this->load->view('common/footer');
	}
}