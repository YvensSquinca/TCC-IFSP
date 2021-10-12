<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depoimentos extends CI_Controller {
    
    public function index(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');

        
        
        $this->load->view('common/footer');
    }

    /*
    *Cria de Depoimentos   
    */
    public function criar(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('DepoimentosModel');
        $this->DepoimentosModel->criar();
        
        $a['titulo'] = "Cadastro de cliente";
        $a['btn'] = "Cadastrar";
        
        $this->load->view('depoimentos/cadastro_depoimentos', $a);

		$this->load->view('common/footer');
    }
    
    /*
    *Lista de Depoimentos   
    */
    public function lista(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('DepoimentosModel');
        $data ['table'] = $this->DepoimentosModel->listar();
        $this->load->view('depoimentos/lista_depoimentos', $data); 
        
        $this->load->view('common/footer');
    }

     /*
    * Detalhe do Depoimento 
    */
    public function detalhe($id){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('DepoimentosModel');
        $a['depoimentos'] = $this->DepoimentosModel->Detalhe($id);
        $this->load->view('depoimentos/detalhe_depoimentos', $a);
        
        $this->load->view('common/footer');
    }

    /*
    * EDITAR OS USUARIOS 
    */
    public function atualizar($id){
        $this->load->view('common/header');
        $this->load->view('common/navbar');

        $this->load->model('DepoimentosModel');
        $this->DepoimentosModel->atualizar($id);
        $a['depoimentos'] = $this->DepoimentosModel->detalhe($id);
        $a['titulo'] = "Atualização do cliente";
        $a['btn'] = "Atualizar";
        $this->load->view('depoimentos/cadastro_depoimentos', $a);
        
		$this->load->view('common/footer');
    }

    /*
    * REMOVER OS USUARIOS 
    */
    public function remover($id){
        $this->load->model('DepoimentosModel');
        $this->DepoimentosModel->remover($id);
        redirect('depoimentos');
    }
}