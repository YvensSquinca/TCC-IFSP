<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ContatoModel extends CI_Model{

    public function enviaEmail()
    {
        $nome = $this->input->post('nome');
        $email= $this->input->post('email');//aqui a mesma coisa, mas com o email
        $assunto= $this->input->post('assunto');//aqui a mesma coisa, mas com o assunto
        $mensagem= $this->input->post('mensagem');//aqui a mesma coisa, mas com o assunto
        
        //agora vamos enviar todos esses dados usando a função mail que é do PHP
        mail("gabrielrenee041@gmail.com","$assunto","
        Nome: $nome
        Email: $email
        Assunto: $assunto
        Mensagem: $mensagem","FROM:$nome<$email>"); 
        
        /*Ele diz assim pro código: "Envia um email para meuemail@meudominio.com.br e que esse email tenha os dados que
        foram pegos em ASSUNTO, NOME, EMAIL, ASSUNTO e MENSAGEM, eles foram pegos com o MÉTODO POST e em FROM vai conter
        os dados de quem enviou o email, ou seja, la na caixa de entrada do teu e-mail vai ter isso. :)*/
        
        echo 'sua mensagem foi enviada com sucesso!';
    }
}
