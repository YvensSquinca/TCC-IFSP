<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DepoimentosModel extends CI_Model{

    public function Detalhe($id){
        //PEGA OS DADOS DO BANCO DE DADOS
        $sql = "SELECT * FROM depoimentos WHERE id = $id";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }

    public function atualizar($id){
       if(! sizeof($_POST)) return;

       $data = $this->input->post();
       //ACTIVERECORD pesquisar em casa.
       $this->db->update('depoimentos', $data, "id = $id");
       redirect('depoimentos');
    }

    public function remover($id){
        $this->db->delete('depoimentos', "id = $id");
        redirect('Depoimentos/lista?enviar');
    }

    public function criar()
    {
        if(! sizeof($_POST)) return;
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $mensagem = $this->input->post('mensagem');

        $imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
        
        $sql = "INSERT INTO depoimentos(nome, email, mensagem, imagem) 
        VALUES ('$nome', '$email', '$mensagem', '$imagem')"; 
        $this->db->query($sql);
    }

} 
