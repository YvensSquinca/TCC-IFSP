<div class="container col-lg-12 col-md-10">
    <div class="row">
        <div class="col-md-12">
        <br><br><br><br>
            <div class="text-center">
            <p class="h2p mb-4">Detalhes do Orçamento</p>
            <br>
                <div class="row text-center">
                    <div class="text-center col-lg-5 col-md-12 mx-auto mb-3">
                        <div class="text-center">
                            <?php
                                echo '<img src="data:image/jpeg;base64,'.base64_encode( $orcamento['imagem'] ).'" class="imgorcamentoresponsiva">';
                            ?>
                            <br><br>
                            <p class="card-title h3p"><a><?= $orcamento['mensagem']  ?></a></p>
                            <br>
                            <p class="card-title h3p"><a>Nome: <?= $orcamento['nome']  ?></a></p>
                            <p class="card-title h3p"><a>Telefone: <?= $orcamento['telefone']  ?></a></p>
                            <p class="card-title h3p"><a>Email: <?= $orcamento['email']  ?></a></p>
                            <p class="card-title h3p"><a>Data: <?= $orcamento['last_modified']  ?></a></p>
                        </div>
                    </div>
                    <div class="text-center col-lg-5 col-md-12 mx-auto">
                        <div class="text-center">
                            <p class="card-title h3p">Anotações</p>
                            <br>
                            <form action="http://hospedagem.ifspguarulhos.edu.br/~gu170088x/netotattoo/index.php/Orcamento/updtitle" method="POST"> 
                                <input type=hidden name="id" value="<?= $orcamento['id']  ?>">
                                <textarea type="textarea" id="anotacao" name="anotacao" class="form-control" placeholder="Anotações" aria-describedby="defaultRegisterFormPhoneHelpBlock" maxlength="350" rows="10"><?= $orcamento['anotacao']  ?></textarea><br>
                                                          
                                <p class="card-title h3p">
                                Situação: 
                                    <select name="title">
                                        <option value="Pendente" <?=($orcamento['situacao'] == 'Pendente')?'selected':''?>>Pendente</option>
                                        <option value="Concluido" <?=($orcamento['situacao'] == 'Concluido')?'selected':''?>>Concluido</option> 
                                    </select><br/>
                                </p>
                                <input class="btn btn-danger my-4 btn-block" type="submit" value="Salvar"/>
                                <a href="<?= base_url('index.php/Orcamento/remover/'.$orcamento['id'])?>">
                                    <i class="fa fa-times mr-3 text-danger ml-3"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

