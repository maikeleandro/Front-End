<?php

/**
 * @author Maike Leandro <maikeleandro996@gmail.com>
 * @copyright (c) Maike.
 * @see Projeto Teste 1.0
 */
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Front-End</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/png/favicon/favicon2.ico" type="image/x-icon" />

    <!-- CSS INCLUDE -->
    <link rel='stylesheet' type='text/css' href='css/bootstrap4/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='css/style.css' />
    <!-- EOF CSS INCLUDE -->

    <!-- ↓ JavaScript Plugins ↓ -->
    <script type='text/javascript' src='js/jquery/jquery.min.js'></script>
    <!-- ↑ JavaScript Plugins ↑ -->

</head>

<body>

    <!-- ↓ HEADER - "Menu da Pagina" ↓ -->
    <header>
        <?php include_once('header.php'); ?>
    </header>
    <!-- ↑ HEADER - "Menu da Pagina" ↑ -->

    <div class="container-fluid">
        <div class="row-container">
            <div class="row-container-body">

                <!--  ↓ CARD 1 ↓ -->
                <div class="row" for="card-home">
                    <div class="card-body div1" id="card-home">
                        <div class="img-responsive col-md-12 text-center">
                            <img class="img-responsive hellmans1" src="img/png/home/logo-promo.png" alt="Imagem1" />
                            <img class="img-responsive hellmans2" src="img/png/home/produtos-home.png" alt="Imagem2" />
                            <button type="button" class="btn btn-warning botao">Participe</button>
                            <img class="img-responsive unilever" src="img/png/home/logo-unilever.png" alt="Imagem3" />
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 1 ↑ -->

                <!--  ↓ CARD 2 ↓ -->
                <div class="row">
                    <div class="card-body div2">
                        <div class="div3">
                            <div class="row">
                                <div class="img-responsive col-md-12 text-center">
                                    <img class="img-responsive hellmans3" src="img/png/premios/premios.png" alt="Imagem4" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 2 ↑ -->

                <!--  ↓ CARD 3 ↓ -->
                <div class="row" for="card-como-part">
                    <div class="card-body div4" id="card-como-part">
                        <div class="img-responsive col-md-12 text-center">
                            <h1 class="text1">COMO PARTICIPAR</h1>
                        </div>
                        <div class="img-responsive col-md-12 text-center">
                            <img class="img-responsive image-size" src="img/png/como-participar/passo-1.png" alt="Imagem5" />
                            <img class="img-responsive image-size" src="img/png/como-participar/passo-2.png" alt="Imagem6" />
                            <img class="img-responsive image-size" src="img/png/como-participar/passo-3.png" alt="Imagem7" />
                            <img class="img-responsive image-size" src="img/png/como-participar/passo-4.png" alt="Imagem7" />
                        </div>
                        <div class="img-responsive col-md-12 text-center">
                            <img class="img-responsive image-size" src="img/png/como-participar/extra-1.png" alt="Imagem8" />
                            <img class="img-responsive image-size" src="img/png/como-participar/extra-2.png" alt="Imagem9" />
                            <img class="img-responsive image-size" src="img/png/como-participar/extra-3.png" alt="Imagem10" />
                        </div>
                        <div class="img-responsive col-md-12 text-center">
                            <img class="img-responsive image-size" src="img/png/como-participar/extra-4.png" alt="Imagem11" />
                        </div>
                        <div class="img-responsive col-md-12 text-center">
                            <button type="button" class="btn btn-warning botao2">Participe</button>
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 3 ↑ -->

                <!--  ↓ CARD 4 ↓ -->
                <div class="row" for="card-premios">
                    <div class="card-body div5" id="card-premios">
                        <div class="div6">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1 class="text2 text-warning">Compre, Junte e Troque</h1>
                                </div>
                                <div class="img-responsive col-md-12 text-center ">
                                    <div class="div7">
                                        <p class="col-4 p1 bg-warning">PRATOS</p>
                                        <p class="col-4 p2">BOWLS</p>
                                        <P class="col-4 p2">TÁBUA</P>
                                    </div>
                                </div>
                                <div class="img-responsive col-md-12 text-center">
                                    <img class="img-responsive nba-discos" src="img/png/galeria/galeria-pratos.png" alt="Imagem12" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 4 ↑ -->

                <!--  ↓ CARD 5 ↓ -->
                <div class="row">
                    <div class="card-body div8">
                        <div class="img-responsive col-md-12 text-center text-video">
                            <p class="text3">DOS DRIBLES E ENTERRADAS MEMORÁVEIS AO ZERAR DO CRONÔMETRO,</p>
                            <p class="text3"><strong>CADA HORA H DA NBA AINDA MAIS SAROSA COM HELMANN'S.</strong></p>
                            <p class="text3" style="margin-bottom: 20px;"><strong>ASSISTA AO FILME ABAIXO:</strong></p>
                        </div>
                        <div class="embed-responsive-21by9 col-md-12 text-center">
                            <iframe class="embed-responsive-item video" src="https://www.youtube.com/embed/KAIR1_wOJvg?si=hly1EbES77fMFMZI" title="YouTube video player" frameborder="0" allow="web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 5 ↑ -->

                <!--  ↓ CARD 6 ↓ -->
                <div class="row" for="card-produtos-part">
                    <div class="card-body div9" id="card-produtos-part">
                        <div class="div10">
                            <div class="img-responsive col-md-12 text-center" style="margin-top: 5%;">
                                <p class="text4">PRODUTOS PARTICIPANTES</p>
                                <p class="text4_5"><strong>TODOS OS SQUEEZES DA LINHA HELLMANSS'S</strong></p>
                            </div>
                            <div class="row">
                                <div class="img-responsive col-md-12 text-center">
                                    <img class="img-responsive hellmans4" src="img/png/home/produtos-home.png" alt="Imagem13" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 6 ↑ -->


                <!--  ↓ CARD 7 ↓ -->
                <div class="row">
                    <div class="card-body div11">
                        <div class="img-responsive col-md-12 text-center">
                            <P class="text5">COMPRE AGORA E PARTICIPE</P>
                        </div>
                        <div class="row">
                            <div class="img-responsive col-md-12 text-center">
                                <img class="img-responsive hellmans5" src="img/png/compre-agora/pda.png" alt="Imagem14" />
                                <img class="img-responsive hellmans5" src="img/png/compre-agora/carrefour.png" alt="Imagem15" />
                            </div>
                            <div class="img-responsive col-md-12 text-center">
                                <button type="button" class="btn btn-warning botao3">GPA</button>
                                <button type="button" class="btn btn-warning botao3">CARREFOUR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  ↑ CARD 7 ↑ -->

                <!--  ↓ CARD 8 "Footer" ↓ -->
                <footer>
                    <?php include_once('footer.php'); ?>
                </footer>
                <!--  ↑ CARD 8 "Footer" ↑ -->
            </div>
        </div>
    </div>

    <!-- START PLUGINS -->
    <script type='text/javascript' src='js/bootstrap4/bootstrap.min.js'></script>
    <!-- END PLUGINS-->

    <!-- CUSTOM SCRIPT -->
    <script type='text/javascript' src='js/index.js'></script>
    <!-- CUSTOM SCRIPT -->
    <!-- END SCRIPTS -->
</body>

</html>
<?php

?>