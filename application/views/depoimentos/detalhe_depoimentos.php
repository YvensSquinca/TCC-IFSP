<div class="container col-md-10">
    <div class="row">
        <div class="col-md-12">
        <br><br><br><br>
            <div class="text-center">
                <div class="text-center">
                    <?php
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $depoimentos['imagem'] ).'" class="imgdepoimentoresponsiva">';
                    ?>
                </div>
                <br>
                <div class="text-center">
                    <div class="text-center">
                        <h4 class="h2p"><a><?= $depoimentos['nome']  ?></a></h4>
                        <p class="card-title h3p"><a>Email: <?= $depoimentos['email']  ?></a></p>
                        <p class="card-title h3p"><a>Mensagem: <?= $depoimentos['mensagem']  ?></a></p>
                        <p class="card-title h3p"><a>Data: <?= $depoimentos['last_modified']  ?></a></p>
                        <?php
                        if ($this->ion_auth->is_admin ()){ ?>
                            <a href="<?= base_url('index.php/depoimentos/remover/'.$depoimentos['id'])?>">
                                <i class="fa fa-times mr-3 text-danger"></i>
                            </a>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

