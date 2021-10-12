<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6 mx-auto mt-5">
            <form name="form1" action="cadastrar" enctype="multipart/form-data" method="POST" class="text-center border-light p-5">
                <p class="h2p mb-4">Orçamento</p>
                <?php
                if(isset($_POST['enviar'])){
                    echo '<div class="alert alert-success" role="alert">Orçamento Enviado com Sucesso !</div>';
                }
                ?>
                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" maxlength="50">
                    </div>
                </div>
                <input type="tel" name="txttelefone" id="txttelefone" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" class="form-control mb-4" placeholder="Telefone">
                <input type="hidden" name="situacao" id="situacao" value="Pendente">
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" maxlength="100">
                <div class="h3p"> Caracteres Restantes </div><div class="h2p" id="cont">350</div>
                <br>
                <textarea type="textarea" onkeyup="limite_textarea(this.value)" id="mensagem" name="mensagem" class="form-control" placeholder="Mensagem" aria-describedby="defaultRegisterFormPhoneHelpBlock" maxlength="350" rows="10"></textarea><br>
                <div class="h3p">Imagem - Maximo de 2MBs</div>
                <br>
                <div style="color:white;"><input class="form-control-file" name="imagem" id="imagem" type="file"/></div> 
                <button class="btn btn-danger my-4 btn-block" type="submit" name="enviar" id="enviar" value="enviar" onclick="return validar()">Enviar</button>
            </form>
        </div>
    </div>
</div>
