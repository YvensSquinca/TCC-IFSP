<div class="containerfull">
  <br>
  <div class="container containerfull">
    <div class="col-lg-8 col-md-6 mx-auto text-center"> 
      <br><br><br><br> 
      <h1 class="h2p"><?php echo lang('login_heading');?></h1>
      
      <p class="h3p">Area Restrita <br>Somente para Usuarios Autorizados</p>
      
      <div class="h3p" id="infoMessage"><?php echo $message;?></div>  
      <br>

      <?php echo form_open("index.php/auth/login");?>

      
        <p>
          <input type="email" id="identity" name="identity" class="form-control mb-4" placeholder="Email">
        </p>
        

        <p>
          <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Senha">
        </p>

        
        <p>
          <button class="btn btn-danger my-4 btn-block" type="submit">Enviar</button>
        </p>

      <?php echo form_close();?>

      <p>
        <a href="forgot_password"><p class="card-title h3p">Esqueceu sua senha?</a>
      </p>
    </div>
  </div>
</div>