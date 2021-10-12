<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto"><br>
            <div class="card">
                <div class="row">
                    <img class="card-img-top col-md-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" alt="Card image cap">
                    <div class="card-body col-md-9">
                        <h4 class="card-title"><a><?= $depoimentos['nome']  ?></a></h4>
                        <p class="card-title"><a>Email: <?= $depoimentos['email']  ?></a></p>
                        <p class="card-title"><a>Mensagem: <?= $depoimentos['mensagem']  ?></a></p>
                        <p class="card-title"><a>Dia de cadastrado: <?= $depoimentos['last_modified']  ?></a></p>
                    </div>
                <div>
            </div>
        </div>
    </div>
</div>