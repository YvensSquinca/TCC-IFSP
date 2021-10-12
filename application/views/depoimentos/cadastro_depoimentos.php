<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6 mx-auto mt-5">
            <form name="form1" action="criar" enctype="multipart/form-data" method="POST" class="text-center border-light p-5">
                <p class="h2p mb-4">Deixe seu Depoimento</p>
                <?php
                if(isset($_POST['enviar'])){
                    echo '<div class="alert alert-success" role="alert">Depoimento Enviado com Sucesso !</div>';
                }
                ?>
                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" maxlength="50">
                    </div>
                </div>
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" maxlength="100">
                <div class="h3p"> Caracteres Restantes </div><div class="h2p" id="cont">350</div>
                <br>                
                <textarea type="text" onkeyup="limite_textarea(this.value)" id="mensagem" name="mensagem" class="form-control" placeholder="Mensagem" aria-describedby="defaultRegisterFormPhoneHelpBlock" maxlength="350" rows="10"></textarea><br>
                <div class="h3p">Imagem - Maximo de 2MBs</div>
                <br>
                <div style="color:white;"><input class="form-control-file" name="imagem" id="imagem" type="file"/></div> 
                <button class="btn btn-danger my-4 btn-block" type="submit" name="enviar" id="enviar" value="enviar" onclick="return validar()">Enviar</button>
            </form>
        </div>
    </div>
</div>
