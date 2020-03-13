<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>


    <section class="webdoor">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="px-4">
                        <picture>
                            <source srcset="assets/images/quer-ganhar-um-ape.webp" type="image/webp">
                            <source srcset="assets/images/quer-ganhar-um-ape.png" type="image/png"> 
                            <img src="assets/images/quer-ganhar-um-ape.png" alt="Campanha quer ganhar um apê">
                        </picture>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div class="p-5">
                        <h1 class="webdoor__title pb-4">Quer ganhar<br>um apê?</h1>
                        <p class="webdoor__text pb-2">Vá até uma das Centrais de Vendas Plano&Plano espalhadas por São Paulo, passe por um atendimento e pronto!</p>
                        <p class="webdoor__text">Você concorre a um apartamento sem ter que comprar nada!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="concorrer">
        <div class="container">
            <div class="text-center">
                <h2 class="concorrer__title">Veja como é fácil concorrer<br>a um apê Plano&Plano!</h2>
            </div>
            <div class="row">
                <div class="col-4 d-flex flex-column concorrer__content">
                    <picture>
                        <source srcset="assets/images/icon-1.webp" type="image/webp">
                        <source srcset="assets/images/icon-1.png" type="image/png"> 
                        <img src="assets/images/icon-1.png" alt="ícone de Visite">
                    </picture>
                    <div>
                        <span class="concorrer__number">1.</span>
                    </div>
                    <div class="concorrer__text">
                        <span>Visite uma Central de Vendas Plano&Plano perto de você!</span>
                    </div>
                </div>
                <div class="col-4 d-flex flex-column concorrer__content">
                    <picture>
                        <source srcset="assets/images/icon-2.webp" type="image/webp">
                        <source srcset="assets/images/icon-2.png" type="image/png"> 
                        <img src="assets/images/icon-2.png" alt="ícone de Visite">
                    </picture>
                    <div>
                        <span class="concorrer__number">2.</span>
                    </div>
                    <div class="concorrer__text">
                        <span>Passe por um atendimento com um dos nossos consultores.</span>
                    </div>
                </div>
                <div class="col-4 d-flex flex-column concorrer__content">
                    <picture>
                        <source srcset="assets/images/icon-3.webp" type="image/webp">
                        <source srcset="assets/images/icon-3.png" type="image/png"> 
                        <img src="assets/images/icon-3.png" alt="ícone de Visite">
                    </picture>
                    <div>
                        <span class="concorrer__number">3.</span>
                    </div>
                    <div class="concorrer__text">
                        <span>Ganhe um cupom, coloque na urna e agora é só torcer.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visite"> 
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-12 col-12 text-center">
                    <h3 class="visite--title">Visite uma Central de Vendas Plano&Plano<br>mais próxima de você!</h3>
                </div>
            </div>
            <!-- Buttons Filter -->
            <div class="row">
                <div class="col-md-2 col-2">
                    <a href="#" class="btn btn-leste">
                        ZONA LESTE
                    </a>
                </div>
                <div class="col-md-2 col-2">
                    <a href="#" class="btn btn-sul">
                        ZONA SUL
                    </a>
                </div>
                <div class="col-md-2 col-2">
                    <a href="#" class="btn btn-norte">
                        ZONA NORTE
                    </a>
                </div>
                <div class="col-md-2 col-2">
                    <a href="#" class="btn btn-oeste">
                        ZONA OESTE
                    </a>
                </div>
                <div class="col-md-2 col-2">
                    <a href="#" class="btn btn-centro">
                        CENTRO
                    </a>
                </div>
                <div class="col-md-2 col-2">
                    <a href="#" class="btn btn-jundiai">
                        JUNDIAÍ
                    </a>
                </div>
            </div>
            <!-- Grid Region -->
            <div class="row">
                <div class="col-md-3 col-12">
                    
                </div>
                <div class="col-md-3 col-12"></div>
                <div class="col-md-3 col-12"></div>
                <div class="col-md-3 col-12"></div>
            </div>
        </div>
    </section>


<?php 

   include('footer.php');
    
?>