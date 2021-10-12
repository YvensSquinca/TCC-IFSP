<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class OrcamentoModel extends CI_Model{

    public function listar()
    {
        $sql = "SELECT * FROM orcamento";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        
        foreach ($m as $row) {
            $html .= "<tr>";
            $html .= "<td><h5 class='h4l' style='color:black;'>$row->nome</h5></td>";
            $html .= "<td><h5 class='h4l' style='color:black;'>$row->telefone</h5></td>";
            $html .= "<td><h5 class='h4l' style='color:black;'>$row->email</h5></td>";
            $html .= "<td><a href=".base_url('index.php/Orcamento/detalhe/'.$row->id)."><h5 class='h4l' style='color:black;'>$row->situacao</h5></a></td>";
            $html .= "</tr>";
        } 
        return $html;
    }

    public function Detalhe($id){
        //PEGA OS DADOS DO BANCO DE DADOS
        $sql = "SELECT * FROM orcamento WHERE id = $id";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }

    public function atualizar($id){
       if(! sizeof($_POST)) return;

       $data = $this->input->post();
       //ACTIVERECORD pesquisar em casa.
       $this->db->update('orcamento', $data, "id = $id");
       redirect('depoimentos');
    }

    public function upddata($data) {
        extract($data);
        $this->db->where('id', $id);
        $this->db->update($table_name, array('situacao' => $title, 'anotacao' => $anotacao));
        return true;
    }

    public function remover($id){
        $this->db->delete('orcamento', "id = $id");
        redirect('Orcamento/lista?enviar');
    }

    public function cadastrar()
    {
        if(! sizeof($_POST)) return;
        $nome = $this->input->post('nome');
        $telefone = $this->input->post('txttelefone');
        $email = $this->input->post('email');
        $mensagem = $this->input->post('mensagem');
        $situacao = $this->input->post('situacao');

        $imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
        
        $sql = "INSERT INTO orcamento(nome, telefone, email, mensagem, situacao, imagem) 
        VALUES ('$nome', '$telefone', '$email', '$mensagem', '$situacao', '$imagem')"; 
        $this->db->query($sql);
    }

} 
