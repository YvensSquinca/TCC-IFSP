<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DepoimentosModel extends CI_Model{


    public function criar()
    {
        if(! sizeof($_POST)) return;
        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $mensagem = $this->input->post('mensagem');

        $sql = "INSERT INTO depoimentos(nome, email, mensagem) 
        VALUES ('$nome', '$email', '$mensagem')";
        $this->db->query($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM depoimentos";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        
        foreach ($m as $row) {
            $html .= "<tr>";
            $html .= "<td>$row->nome</td>";
            $html .= "<td>$row->email</td>";
            $html .= "<td>$row->mensagem</td>";
            $html .= '<td>'.$this->get_action_buttons($row->id).'</td>';
            $html .= "</tr>";

        }
        return $html;
    }

    private function get_action_buttons($id){
        
        $html = '<a href="'.base_url('depoimentos/detalhe/'.$id).'">
        <i class="fas fa-search mr-3 text-muted"></i></a>

        <a href="'.base_url('depoimentos/atualizar/'.$id).'">
        <i class="fas fa-edit mr-3 text-primary"></i></a>
        
        <a href="'.base_url('depoimentos/remover/'.$id).'">
        <i class="fas fa-trash-alt mr-3 text-danger">x</i></a>';
        
        return $html;
    }
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
    }


}