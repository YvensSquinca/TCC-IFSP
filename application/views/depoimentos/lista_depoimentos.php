<?php
//verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//seleciona todos os itens da tabela 
$sql = "SELECT * FROM depoimentos"; 
$produtos = $this->db->query($sql);

//conta o total de itens 
$total = $produtos->num_rows(); 
 
//seta a quantidade de itens por página, neste caso, 2 itens 
$registros = 10; 

//calcula o número de páginas arredondando o resultado para cima 
$numPaginas = ceil($total/$registros); 

//variavel para calcular o início da visualização com base na página atual 
$inicio = ($registros*$pagina)-$registros; 

//seleciona os itens por página 
$sql = "SELECT * FROM depoimentos limit $inicio,$registros"; 
$produtos = $this->db->query($sql); 
$total = $produtos->num_rows(); 
$m = $produtos->result();

?>
<div class="container col-lg-12 col-md-12">
    <br><br>
    <h1 class="h2p text-center mt-5" style="color:white;"> Depoimentos </h1>
    <br>
    <a href="<?= base_url('index.php/Depoimentos/criar') ?>"><h1 class="h4p mr-2" style="color:white;"><span class="light">Deixe seu Depoimento</span></h1></a>
    <br>
    <?php
        if(isset($_GET['enviar'])){
            echo '<div class="alert alert-success text-center" role="alert">Depoimento Excluido com Sucesso !</div>';
        }
    ?>
    <div class="row">
        <div class="col-md-12 mt-2">
            <table class="table">
                <thead class="black white-text">
                    <tr>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php   
                foreach ($m as $row) {
                    echo 
                    "<tr>
                    <td>
                    <section class='text-center mt-3'>
                    <!-- Grid row -->
                    <div class='row'>
                        <!--Grid column-->
                        <div class='col-lg-2 col-md-12'>
                            <img src='data:image/jpeg;base64, ".base64_encode( $row->imagem )."' class='rounded-circle img-fluid imglistadepoimento'>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class='col-lg-10 col-md-12'>
                        <div class='row'>
                            <div class='col-lg-12 col-md-12'>
                                <div class='card'>    
                                    <div class='card-up info-color'></div>
                                        <div class='card-body'>
                                        <!--Name-->
                                        <a href=".base_url('index.php/depoimentos/detalhe/'.$row->id).">
                                            <h4 class='font-weight-bold mb-4'>$row->nome</h4>
                                        </a>
                                        <h6 class='font-weight-bold blue-text my-3'>$row->email</h6>
                                        <hr>
                                        <!--Quotation-->
                                        <p class='dark-grey-text mt-4'><i class='fas fa-quote-left pr-2'></i>$row->mensagem</p>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        </div>
                        </a>
                        <!--Grid column-->
                    </div>
                    <!-- Grid row -->
                    </section>
                    </td>
                    </tr>";
                }
                ?>
                </tbody>  
            </table>      
        </div>
    </div>
    <div class="text-center h2p">
        <?php
        for($i = 1; $i < $numPaginas + 1; $i++) { 
            echo "<a href='lista?pagina=$i'>".$i."</a> "; 
        } 
        ?>
    </div>
</div> 
