<div class="container col-lg-12 col-md-12">
    <br><br>
    <h1 class="h2p text-center mt-5" style="color:white;">Orçamentos</h1>
    <br>
    <?php
        if(isset($_GET['enviar'])){
            echo '<div class="alert alert-success text-center" role="alert">Orçamento Excluido com Sucesso !</div>';
        }
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12 col-md-12 mt-2">
            <table id="myTable" class="table-responsive-md" style="width:100%">
                <thead class="black white-text">
                    <tr>
                    <th scope="col"><h5 class="h3p">Nome</h5></th>
                    <th scope="col"><h5 class="h3p">Telefone</h5></th>
                    <th scope="col"><h5 class="h3p">Email</h5></th>
                    <th scope="col"><h5 class="h3p">Situação</h5></th>
                    </tr>
                </thead>
                <tbody>   
                    <?= $table ?>
                </tbody>  
            </table>      
        </div>
    </div>
</div> 
