<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>


    <section class="webdoor" id="webdoor">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="px-4">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/quer-ganhar-um-ape.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/quer-ganhar-um-ape.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/quer-ganhar-um-ape.png" alt="Campanha quer ganhar um apê">
                        </picture>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex align-items-center">
                    <div class="p-3 p-md-5">
                        <h1 class="webdoor__title pb-4">Quer ganhar<br>um apê?</h1>
                        <p class="webdoor__text pb-2">Vá até uma das Centrais de Vendas Plano&Plano espalhadas por São Paulo, passe por um atendimento e pronto!</p>
                        <p class="webdoor__text">Você concorre a um apartamento sem ter que comprar nada!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="concorrer" id="concorrer">
        <div class="container">
            <div class="text-center">
                <h2 class="concorrer__title">Veja como é fácil concorrer<br>a um apê Plano&Plano!</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-12 d-flex flex-column concorrer__content">
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
                <div class="col-md-4 col-12 d-flex flex-column concorrer__content">
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
                <div class="col-md-4 col-12 d-flex flex-column concorrer__content">
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

    <section class="visite" id="centralVendas"> 
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-md-12 col-12 text-center">
                    <h3 class="visite--title">Visite uma Central de Vendas Plano&Plano<br>mais próxima de você!</h3>
                </div>
            </div>
            <!-- Buttons Filter -->
            <div class="row" id="filter">
                <div class="col-md-2 col-6 m-10">
                    <a href="#" class="btn btn-leste" id="zona-leste">
                        ZONA LESTE
                    </a>
                </div>
                <div class="col-md-2 col-6 m-10" >
                    <a href="#" class="btn btn-sul" id="zona-sul">
                        ZONA SUL
                    </a>
                </div>
                <div class="col-md-2 col-6 m-10" >
                    <a href="#" class="btn btn-norte" id="zona-norte">
                        ZONA NORTE
                    </a>
                </div>
                <div class="col-md-2 col-6 m-10" >
                    <a href="#" class="btn btn-oeste" id="zona-oeste">
                        ZONA OESTE
                    </a>
                </div>
                <div class="col-md-2 col-6 m-10">
                    <a href="#" class="btn btn-centro" id="centro">
                        CENTRO
                    </a>
                </div>
                <div class="col-md-2 col-6 m-10" >
                    <a href="#" class="btn btn-jundiai" id="jundiai">
                        JUNDIAÍ
                    </a>
                </div>
            </div>
            <!-- Grid Region -->
            <div class="row m-50">
                <!-- Partial 1 -->
                <div class="col-md-3 col-12 m-20 p-0 todos zona-sul">
                    <div class="visite--region">
                        <p class="title">
                            Sacomã
                        </p>
                        <p class="text h-65">
                            Rua Dom Vilares, 1227 - Vila das Mercês
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 18h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/R.+Dom+Vilares,+1227+-+Vila+das+Merces,+S%C3%A3o+Paulo+-+SP,+04160-001/@-23.6244667,-46.6095561,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5b71fda6b2c9:0x721ba058caeb7b89!8m2!3d-23.6244716!4d-46.6073674" target="_blank" class="btn btn-red">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-oeste">
                    <div class="visite--region">
                        <p class="title">
                            Zona Oeste
                        </p>
                        <p class="text h-65">
                            Rua Caminho do Engenho, 600 (esquina c/ Avenida Pirajussara)
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 20h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/R.+Caminho+do+Engenho,+600+-+Ferreira,+S%C3%A3o+Paulo+-+SP,+05524-010/@-23.5962812,-46.7474742,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce569d2a9a85b5:0xdca747552e3849e2!8m2!3d-23.5962861!4d-46.7452855" target="_blank" class="btn btn-red">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-leste">
                    <div class="visite--region"> 
                        <p class="title">
                            Penha
                        </p>
                        <p class="text h-65">
                            Avenida São Miguel, 962 (estacionamento do Extra Hipermercado)
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 08h00 às 20h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Av.+S%C3%A3o+Miguel,+962+-+Vila+Marieta,+S%C3%A3o+Paulo+-+SP,+03618-010/@-23.5155643,-46.5221447,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5e2923c076a9:0x6d4119443c74a8f0!8m2!3d-23.5155692!4d-46.519956" target="_blank" class="btn btn-red">Como chegar</a> 
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-leste">
                     <div class="visite--region"> 
                        <p class="title">
                            Anhaia Melo
                        </p>
                        <p class="text h-65">
                            Avenida Prof. Luiz Inácio de Anhaia Melo, 2.785 – Vila Prudente
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 18h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Av.+Professor+Luiz+Ign%C3%A1cio+Anhaia+Mello,+2785+-+Vila+Prudente,+S%C3%A3o+Paulo+-+SP,+03155-100/@-23.5823831,-46.5689937,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5c479d6d161b:0x281e22384db68b6c!8m2!3d-23.582388!4d-46.566805" target="_blank" class="btn btn-red">Como chegar</a> 
                    </div>
                </div>
                <!-- End -->
                <!-- Partial 2 -->
                <div class="col-md-3 col-12 m-20 p-0 todos zona-sul">
                    <div class="visite--region">
                        <p class="title">
                            Zona Sul
                        </p>
                        <p class="text h-65">
                            Estrada de Itapecerica, 1700 (em frente ao Hospital do Campo Limpo)
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 21h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Estr.+de+Itapecerica,+1700+-+Vila+das+Belezas,+S%C3%A3o+Paulo+-+SP,+05780-210/@-23.6483644,-46.7520547,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce53df04cac2ed:0x336c1cf3a2d92fb5!8m2!3d-23.6483693!4d-46.749866" target="_blank" class="btn btn-red">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-leste">
                    <div class="visite--region">
                        <p class="title">
                            Shopping Itaquera
                        </p>
                        <p class="text h-65">
                            Avenida José Pinheiro Borges, s/n Shopping Metrô Itaquera - Piso Metrô - Itaquera
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 10h00 às 22h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Shopping+Metr%C3%B4+Itaquera/@-23.5405572,-46.4728319,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5e622db57c4f:0x3de99bb691d3dc68!8m2!3d-23.5405621!4d-46.4706432" target="_blank" class="btn btn-red">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-sul">
                    <div class="visite--region"> 
                        <p class="title">
                            Laguna
                        </p>
                        <p class="text h-65">
                            Rua Laguna, 457 (esquina com a Rua Castro Verde)
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 19h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/R.+Laguna,+457+-+Jardim+Caravelas,+S%C3%A3o+Paulo+-+SP,+04728-001/@-23.6381212,-46.7178177,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce51197cc3766f:0xac925c78fcabb8c4!8m2!3d-23.6381261!4d-46.715629" target="_blank" class="btn btn-red">Como chegar</a> 
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-norte">
                     <div class="visite--region"> 
                        <p class="title">
                            Zona Norte Rudge
                        </p>
                        <p class="text h-65">
                            Avenida Rudge, 305 – Bom Retiro
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 20h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Av.+Rudge,+305+-+Bom+Retiro,+S%C3%A3o+Paulo+-+SP/@-23.5244258,-46.652583,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5872bb07cb05:0xa243ffd830894acd!8m2!3d-23.5244307!4d-46.6503943" target="_blank" class="btn btn-red">Como chegar</a> 
                    </div>
                </div>
                <!-- END -->
                <!-- Partial 3 -->
                <div class="col-md-3 col-12 m-20 p-0 todos zona-leste">
                    <div class="visite--region">
                        <p class="title">
                            Jacu Pêssego
                        </p>
                        <p class="text h-65">
                            Avenida Jacu Pêssego (esquina com a Rua Agrimensor Sugaya, 7)
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 18h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/R.+Agrimensor+Sugaya,+1735+-+Col%C3%B4nia+(Zona+Leste),+S%C3%A3o+Paulo+-+SP,+08260-030/@-23.5569751,-46.4471617,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce66873b9005f9:0x5a640512146c829c!8m2!3d-23.55698!4d-46.444973" target="_blank" class="btn btn-red">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos zona-sul">
                    <div class="visite--region">
                        <p class="title">
                            Cupecê
                        </p>
                        <p class="text h-65">
                            Avenida Cupecê, 1110 - Santo Amaro
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 18h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Av.+Cupec%C3%AA,+1110+-+Santo+Amaro,+S%C3%A3o+Paulo+-+SP,+04366-000/@-23.6544435,-46.6722229,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5a9fdcef0001:0x3d6aab131baaaae5!8m2!3d-23.6544484!4d-46.6700342" target="_blank" class="btn btn-red">Como chegar</a>
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos centro">
                    <div class="visite--region"> 
                        <p class="title">
                            Centro Independência
                        </p>
                        <p class="text h-65">
                            Rua Independência, 458 – Cambuci
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 20h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/R.+da+Independ%C3%AAncia,+458+-+Cambuci,+S%C3%A3o+Paulo+-+SP,+01515-000/@-23.5668486,-46.6201392,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce596eafc68845:0x9f6fe1d2eb3b1d32!8m2!3d-23.5668535!4d-46.6179505" target="_blank" class="btn btn-red">Como chegar</a> 
                    </div>
                </div>
                <div class="col-md-3 col-12 m-20 p-0 todos jundiai">
                     <div class="visite--region"> 
                        <p class="title">
                            Jundiaí
                        </p>
                        <p class="text h-65">
                            Avenida Nove de Julho, 1515 - Posto Bate Bola
                        </p>
                        <p class="text m-30">
                            <strong>Horário de funcionamento: 09h00 às 18h00</strong>
                        </p>
                        <a href="https://www.google.com/maps/place/Posto+Shell+-+Auto+Posto+Bate+Bola+Ltda/@-23.186601,-46.8939627,17z/data=!3m1!4b1!4m5!3m4!1s0x94cf26902ebaa693:0x7395ffbcab3bbb74!8m2!3d-23.1866059!4d-46.891774" target="_blank" class="btn btn-red">Como chegar</a> 
                    </div>
                </div>
                <!-- END -->
            </div> 
        </div>
    </section>

    <section class="historia" id="historia">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h3 class="historia--title">Essa história também pode ser a sua! </h3>
                    <p class="historia--text">#queroganharumape</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="historia--video">
                        <a href="#" class="link-video" data-video-id="X1qK3Okfn-k"> 
                            <picture>
                                <source class="" srcset="assets/images/play.webp" type="image/webp">
                                <source class="" srcset="assets/images/play.png" type="image/png"> 
                                <img class="" src="assets/images/play.png" alt="play">
                            </picture>
                        </a>
                        <picture>
                            <source class="img-fluid" srcset="assets/images/karine-jefferson.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/karine-jefferson.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/karine-jefferson.png" alt="Karine e Jefferson">
                        </picture> 
                        <p class="historia--nome">Karine e Jefferson</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="historia--video">
                        <a href="#" class="link-video" data-video-id="aBLqQsQzJYw">
                            <picture>
                                <source class="" srcset="assets/images/play.webp" type="image/webp">
                                <source class="" srcset="assets/images/play.png" type="image/png"> 
                                <img class="" src="assets/images/play.png" alt="play">
                            </picture>    
                        </a>
                        <picture>
                            <source class="img-fluid" srcset="assets/images/lucas-debora.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/lucas-debora.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/lucas-debora.png" alt="Lucas e Débora">
                        </picture> 
                        <p class="historia--nome">Lucas e Débora</p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="historia--video">
                        <a href="#" class="link-video" data-video-id="pi6oVk0cJnw">  
                             <picture>
                                <source class="" srcset="assets/images/play.webp" type="image/webp">
                                <source class="" srcset="assets/images/play.png" type="image/png"> 
                                <img class="" src="assets/images/play.png" alt="play">
                            </picture>  
                        </a>
                        <picture>
                            <source class="img-fluid" srcset="assets/images/sabrina-samuel.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/sabrina-samuel.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/sabrina-samuel.png" alt="Sabrina e Samuel">
                        </picture> 
                        <p class="historia--nome">Lucas e Débora</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay">
            <div class="video"> 
                <iframe width="100%" height="100%" frameborder="0" id="video" frameborder="0" allowfullscreen></iframe>
                <a href="#" class="video--close">X</a>
            </div>
        </div>
    </section>


<?php 

   include('footer.php');
    
?>