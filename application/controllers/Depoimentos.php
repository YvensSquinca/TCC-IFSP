<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depoimentos extends CI_Controller {
     /*
    *Lista de Depoimentos   
    */
    public function lista(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('DepoimentosModel');
        $this->load->view('depoimentos/lista_depoimentos');
        
        $this->load->view('common/footer');
    }
    /*
    *Cria Depoimento 
    */
    public function criar(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('DepoimentosModel');
        $this->DepoimentosModel->criar();
        
        $this->load->view('depoimentos/cadastro_depoimentos');

		$this->load->view('common/footer');
    }
    /*
    *Detalhe do Depoimento 
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
    * Editar Depoimento 
    public function atualizar($id){
        $this->load->view('common/header');
        $this->load->view('common/navbar');

        $this->load->model('DepoimentosModel');
        
        $this->DepoimentosModel->atualizar($id);
        $a['depoimentos'] = $this->DepoimentosModel->detalhe($id);
        
        $this->load->view('depoimentos/cadastro_depoimentos', $a);
        
		$this->load->view('common/footer');
    }
    /*
    * Remover Depoimento 
    */
    public function remover($id){
        if ($this->ion_auth->is_admin ())
        {
            $this->load->model('DepoimentosModel');
            $this->DepoimentosModel->remover($id);
            redirect('Depoimentos/lista');
        }
        else 
        redirect('auth/login');
    }
}