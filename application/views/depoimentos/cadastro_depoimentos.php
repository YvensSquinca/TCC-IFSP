<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <form method="POST" class="text-center border-light p-5">
                <p class="h4 mb-4"><?= $titulo ?></p>
                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" value="<?= isset($depoimentos['nome']) ? $depoimentos['nome'] : '' ?>" id="nome" name="nome" class="form-control" placeholder="Nome">
                    </div>
                    
                </div>
                <input type="email" value="<?= isset($depoimentos['email']) ? $depoimentos['email'] : '' ?>" id="email" name="email" class="form-control mb-4" placeholder="E-mail">
                <br>
                <input type="text" value="<?= isset($depoimentos['mensagem']) ? $depoimentos['mensagem'] : '' ?>" id="mensagem" name="mensagem" class="form-control" placeholder="Mensagem" aria-describedby="defaultRegisterFormPhoneHelpBlock"><br>
                <button class="btn btn-black my-4 btn-block" type="submit"><?= $btn ?></button>
            </form>
        </div>
    </div>
</div>