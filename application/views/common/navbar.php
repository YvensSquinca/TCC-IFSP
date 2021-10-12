<nav class="navbar fixed-top elegant-color-dark scrolling-navbar navbar-dark lighten-1">
    <a class="navbar-brand ml-4" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/mdb/img/netotattoo.png')?>" height="50" alt="mdb logo">
    </a>
    <div class="button nav-right mt-2" id="btn">
        <div class="bar top"></div>
        <div class="bar middle"></div>
        <div class="bar bottom"></div>
    </div>
</nav>

<div class="sidebar-item sidebar"> 
  <ul class="sidebar-list">
    <img src="<?= base_url('assets/mdb/img/catrina.png')?>" alt="katrina" width=50% style="text-align: center;">
    <li class="sidebar-item h3p"><a href="<?= base_url('') ?>" class="sidebar-anchor">Home</a></li>
    <li class="sidebar-item h3p"><a href="<?= base_url('index.php/Galeria') ?>" class="sidebar-anchor">Galeria</a></li>
    <li class="sidebar-item h3p"><a href="http://hospedagem.ifspguarulhos.edu.br/~gu170088x/netotattoo/assets/mdb/themes.php" class="sidebar-anchor">Agenda</a></li>
  <li class="text-center h3p">
    <?php
      if ($this->ion_auth->is_admin ())
      {
        $user = $this->ion_auth->user()->row();
        echo '<a href="'.base_url('index.php/auth/logout').'"><i class="fa fa-user-times"></i></a> '.'<a href="'.base_url('index.php/Admin').'">'.$user->email.'<a>';  
      }
      else
      {
        echo '<a href="'.base_url('index.php/auth/login').'"><i class="fa fa-user"></i></a>';
      } 
    ?> 
  </li>
  </ul>  
</div>
<main class="containerfull mt-3" style="background-image: url('<?php echo base_url(); ?>assets/mdb/img/fundo.png'); background-attachment: fixed; background-repeat: no-repeat;">
