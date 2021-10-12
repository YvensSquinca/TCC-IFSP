<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orcamento extends CI_Controller {
     /*
    *Lista de Depoimentos   
    */
    public function lista(){
        if ($this->ion_auth->is_admin ())
        {
            $this->load->view('common/header');
            $this->load->view('common/navbar');
            
            $this->load->model('OrcamentoModel');
            $data ['table'] = $this->OrcamentoModel->listar();
            $this->load->view('orcamento/lista_orcamento', $data);
            
            $this->load->view('common/footer');
    
        }
        else
        { 
        redirect('auth/login');
        }
    }
    /*
    *Cria Depoimento 
    */
    public function cadastrar(){
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('OrcamentoModel');
        $this->OrcamentoModel->cadastrar();
        
        $this->load->view('orcamento/cadastro_orcamento');

		$this->load->view('common/footer');
    }
    /*
    *Detalhe do Depoimento 
    */
    public function detalhe($id){
              
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        
        $this->load->model('OrcamentoModel');
        $a['orcamento'] = $this->OrcamentoModel->Detalhe($id);
        $this->load->view('orcamento/detalhe_orcamento', $a);

        $this->load->view('common/footer');
    
    }
    
    public function updtitle(){
        if ($this->ion_auth->is_admin ())
        {
            $data = array(
                'table_name' => 'orcamento', // pass the real table name
                'id' => $this->input->post('id'),
                'title' => $this->input->post('title'),
                'anotacao' => $this->input->post('anotacao')
            );

            $this->load->model('OrcamentoModel'); // load the model first
            if($this->OrcamentoModel->upddata($data)) // call the method from the model
            {
                redirect('Orcamento/lista');
            }
            else
            {}
        }
        else
        { 
        redirect('auth/login');
        }
    }
    /*
    * Remover Depoimento 
    */
    public function remover($id){
        if ($this->ion_auth->is_admin ())
        {
            $this->load->model('OrcamentoModel');
            $this->OrcamentoModel->remover($id);
            redirect('Orcamento/lista');
        }
        else 
        redirect('auth/login');
    }
}