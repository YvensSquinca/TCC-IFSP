<?php

$a = $this->DepoimentosModel->Detalhe(1);

$b = $this->DepoimentosModel->Detalhe(2);

$c = $this->DepoimentosModel->Detalhe(3);

?>

<div class="col-lg-8 col-md-12 col-12 mb-5">
    <!-- Section: Testimonials v.2 -->
    <section class="text-center">

    <!-- Section heading -->
    <h2 class="h1-responsive my-5 h2p" style="color:white;">Depoimentos</h2>

    <div class="wrapper-carousel-fix">
        <!-- Carousel Wrapper -->
        <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
        data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
            <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto mb-4">
                <?php
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $a['imagem'] ).'" class="rounded-circle imgdepoimentoinicioresponsiva" alt="First sample avatar image">';
                ?>
                </div>
                <!--Content-->
                <p class="h3p" style="color:white;">
                <?= $a['mensagem']  ?>
                </p>
                <h4 class="font-weight-bold" style="color:white;"><?= $a['nome']  ?></h4>
            </div>
            </div>
            <!--First slide-->
            <!--Second slide-->
            <div class="carousel-item">
            <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto mb-4">
                <?php
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $b['imagem'] ).'" class="rounded-circle imgdepoimentoinicioresponsiva" alt="First sample avatar image" width=40%>';
                ?>
                </div>
                <!--Content-->
                <p class="h3p" style="color:white;">
                <?= $b['mensagem']  ?>
                </p>
                <h4 class="font-weight-bold" style="color:white;"><?= $b['nome']  ?></h4>
            </div>
            </div>
            <!--Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
            <div class="testimonial">
                <!--Avatar-->
                <div class="avatar mx-auto mb-4">
                <?php
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $c['imagem'] ).'" class="rounded-circle imgdepoimentoinicioresponsiva" alt="First sample avatar image" width=40%>';
                ?>
                </div>
                <!--Content-->
                <p class="h3p" style="color:white;">
                <?= $c['mensagem']  ?>
                </p>
                <h4 class="font-weight-bold" style="color:white;"><?= $c['nome']  ?></h4>
            </div>
            </div>
            <!--Third slide-->
        </div>
        <!--Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1" role="button"
            data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
            data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--Controls-->
        </div>
        <!-- Carousel Wrapper -->
    </div>
    <a href="<?= base_url('index.php/Depoimentos/lista') ?>"><h5 class="font-weight-bold mt-3 h4p">
        <span class="light">Veja Mais Depoimentos...</span>
    </h5></a>
    </section>
    <!-- Section: Testimonials v.2 -->
    
</div>
<br><br>
