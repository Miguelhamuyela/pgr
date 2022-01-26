

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Procuradoria Geral da República</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('assets/img/favi.png') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('assets/img/favi.png') ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('assets/img/favi.png') ?>">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link rel='stylesheet' href='assets/vendor/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/vendor/icofont/icofont.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/vendor/animate.css/animate.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/vendor/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/vendor/nivo-slider/css/nivo-slider.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/vendor/owl.carousel/assets/owl.carousel.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/vendor/venobox/venobox.css' type='text/css' media='all' />
        <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <style>
            header .logo-composition {
                font-size: 15px;
                color: #fff;
                font-family: 'Open Sans', sans-serif;
                position: relative;
                z-index: 5;
                white-space: nowrap;
                width: 100%;
            }

            .navbar-brand {
                display: inline-block;
                margin-top: -25px !important;
                padding-bottom: .3125rem;
                margin-right: 1rem;
                font-size: 1.25rem;
                line-height: inherit;
                white-space: nowrap;
            }

            .navbar-brand {
                margin-right: 0 !important;
            }

            a {
                outline: none !important;
            }

            a:hover,
            a {
                /*color: #CF142B;*/
                color: #800000;
            }

            .domain-composition {
                display: inline-block;
                vertical-align: bottom;
                position: relative;
                padding: 0 0 0 10px;
                margin: 0 0 0 4px;
                width: 83%;
                overflow: hidden;
            }

            header .logo-composition .domain-name {
                font-size: 2.3em;
                font-weight: 700;
                letter-spacing: -0.19rem;
                line-height: normal;
                display: inline-block;
            }

            header .logo-composition .domain-top-level {
                font-size: 1.8em;
                color: yellow;
                /*color: #ed1c24;*/
                font-weight: 300;
                letter-spacing: -0.1rem;
                line-height: 1;
                position: relative;
                top: -3px;
                margin-left: 5px;
            }

            header .logo-composition .domain-full-title {
                font-size: 0.65em;
                font-weight: 400;
                display: block;
                text-transform: uppercase;
                line-height: normal;
                line-height: 1;
                width: 100%;
                max-width: 330px;
                min-width: 290px;
                position: relative;
                top: -1px;
            }

            header .logo-composition .domain-composition::before {
                content: '';
                display: block;
                clear: both;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 1px;
                height: 73%;
                background-color: #fff;
            }

            *,
            ::after,
            ::before {
                box-sizing: border-box;
            }

            .mapcontainer {
                padding: 10px;
                max-width: 100%;
                /* background: red;  */
                display: flex;
                flex-wrap: wrap;
            }

            .areaLegend {
                flex-basis: 30%;
                padding: 100px 20px;
                /* background-color: rebeccapurple; */
            }

            .map {
                margin: 0 auto !important;
                flex-basis: 50%;
                width: 60%;
            }

            .mapael .map {
                position: relative;
            }

            .mapael .mapTooltip {
                position: absolute;
                background-color: #fff;
                moz-opacity: 0.90;
                opacity: 0.90;
                filter: alpha(opacity=90);
                border-radius: 10px;
                padding: 10px;
                z-index: 1000;
                max-width: 200px;
                display: none;
                color: #343434;
            }

            .nivoSlider {
                position: relative;
                object-fit: cover; 
                margin-top: 160px !important;
                width: 100%;
                height: 83vh !important;
                overflow: hidden;
            }

            .descricao{
                bottom: 130px !important;
            }
            @media only screen and (max-width: 768px) {
                .mapcontainer {
                    align-content: center;
                }

                .map {
                    max-width: 100%;
                }

                .img {
                    width: 100% !important;
                    float: none !important;
                    margin: 5px 0px 18px 0px !important;
                }

                .text {
                    width: 91% !important;
                    margin: auto;
                }
                .nivoSlider {
                    position: relative;
                    object-fit: cover; 
                    margin-top: 160px !important;
                    width: 100%;
                    height: 43vh !important;
                    overflow: hidden;
                }
                .descricao{
                    bottom: 30px !important;
                    max-width: 70% !important;
                    font-size: 8px !important;
                }

            }

            @media (max-width: 767px) {
                .logo-composition {
                    font-size: 14px;
                }

                .logo-composition .domain-composition::before {
                    height: 70%;
                }
            }


        </style>
    </head>

    <body data-spy="scroll" data-target="#navbar-example">

        <!-- ======= Header ======= -->
        <?php include('includes/header.php') ?>
        <!-- End Header -->

        <!-- ======= Slider Section ======= -->
         <div id="home" class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <?php foreach ($banners as  $banner) : ?>
                        <img class="banner"  src="<?= URL_BASE_FILES . $banner->imagem ?>" style="max-height:40px!important" alt="" title="#slider-direction-1" />
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!-- End Slider -->

        <main id="main">

            <!-- ======= About Section ======= -->
            
            <!-- End About Section -->



              <!-- End Team Section -->

            <!-- ======= Suscribe Section ======= -->
                <!-- ======= About Section ======= -->
            <div id="about" class="about-area area-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                            <div class="section-headline text-center">
                                <h2>Boas Vindas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 0 auto !important;">
                            <div class="row">

                                <!-- single-well end-->
                                <div>
                                    <div>
                                        <div class="text">
                                            <div style="-webkit-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);-moz-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);">
                                                <img class="img" style="border-radius: 2px;width:50%;float: left; margin: 0px 30px 0px 0px" src="<?= asset('assets/img/blog/2.jpg') ?>" alt="">
                                            </div>

                                            <p style="text-align: justify; ">
                                                Em Democracia, as instituições públicas exercem as suas funções norteadas pela
                                                prossecução do interesse público, pela transparência e pela prestação de contas à
                                                sociedade do cumprimento das suas atribuições constitucionais e legais, na medida em
                                                que é em nome e em prol dos cidadãos que se estruturam e organizam os poderes
                                                públicos. <br><br>
                                                A Procuradoria-Geral da República, o fiscal mor da legalidade democrática, obriga-se à
                                                criação de canais de comunicação e de interacção com os cidadãos, de modo a permitir
                                                o escrutínio da sua acção e a obter dos destinatários finais do seu papel social o retorno
                                                necessário ao aprimoramento e melhoria dos seus procedimentos. <br><br>
                                                Nesta era digital, a inauguração do presente portal da Procuradoria-Geral da República
                                                visa impulsionar e dinamizar o fornecimento de informações sobre o funcionamento
                                                desta Instituição, a sua composição em matéria de magistrados do Ministério Público,
                                                técnicos de justiça e outros servidores, bem como a divulgação de toda a actividade
                                                quotidiana com valor noticioso ou de interesse público. <br><br>
                                                Um recurso extremamente útil e de reforço ao exercício da cidadania é o espaço para a
                                                apresentação de denúncias públicas, cuja confidencialidade a anonimização dos
                                                denunciantes é garantida pelo sistema informático e por técnicos especializados da
                                                Procuradoria-Geral da República, permitindo ainda que o interessado faça o
                                                acompanhamento do tratamento dado à sua denúncia por via do portal. <br><br>
                                                Eis mais um passo no sentido da promoção do exercício da cidadania plena e na
                                                optimização das iniciativas comunicacionais da Procuradoria-Geral da República. <br><br><br>
                                                Sejam todos bem-vindos!

                                                <h4 class="sec-head">Hélder Fernando Pitta Gróz </h4>
                                                <p style="margin-top:-10px;font-style: italic;">Procurador Geral da República</p>


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Section -->



            <!-- ======= Team Section ======= -->
            <div id="team" class="our-team-area area-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Direcção</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row team-row" style="margin: 30px auto 30px auto;">

                        <div class="col-md-6 first" style="
                            transition: box-shadow .25s;
                            border-radius: 2px;
                            background-color: #fff; 
                            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);    
                            margin: 30px auto 30px auto;
                        ">
                            <div class="row" style="display: flex !important;">
                                <div class="col-md-6" style="padding: 0!important;">
                                    <img style="height: 200px !important;" src="<?= asset('assets/img/team/3.jpg') ?>" alt="">
                                </div>
                                <div class=" col-md-5">
                                    <h4 style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                        Hélder Fernando Pitta Gróz
                                    </h4>
                                    <div><span style="font-weight: 700;display: block;clear: both;">Procurador Geral da República</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin: 30px auto 30px auto;">

                        <div class="col-md-5 first" style="
                                transition: box-shadow .25s;
                                border-radius: 2px;
                                background-color: #fff; 
                                box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                margin: 30px auto 30px auto;
                            ">
                            <div class="row" style="display: flex !important;">
                                <div class="col-md-6" style="padding: 0!important;">
                                    <img style="height: 165px !important;" src="<?= asset('assets/img/team/MotaLiz.jpeg') ?>" alt="">
                                </div>
                                <div class=" col-md-5">
                                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                        Luís de Assunção Pedro da Mota Liz
                                    </h4>
                                    <div><span style="font-weight: 700;display: block;clear: both;">Vice-Procurador Geral da República</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 first" style="
                            transition: box-shadow .25s;
                            border-radius: 2px;
                            background-color: #fff; 
                            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                            margin: 30px auto 30px auto;
                        ">
                            <div class="row" style="display: flex !important;">
                                <div class="col-md-6" style="padding: 0!important;">
                                    <img style="height: 165px !important;" src="<?= asset('assets/img/team/Filomeno1.jpg') ?>" alt="">
                                </div>
                                <div class=" col-md-5">
                                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                        Filomeno Octávio da Conceição
                                    </h4>
                                    <div><span style="font-weight: 700;display: block;clear: both;">Vice-Procurador Militar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 60px !important; margin-bottom: -30px; display: flex !important;justify-content:center !important;">
                        <a href="<?= $router->route('membrospage') ?>">
                            <h6 style="text-align: center; color: #800000;">Ver Todos ></h6>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Team Section -->

            <!-- ======= Suscribe Section ======= -->
            <div class="suscribe-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline1 text-center">
                                <h2 style="color: white;">Notícias</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Suscribe Section -->
            <!-- End Suscribe Section -->

            <!-- ======= Blog Section ======= -->
            <div id="blog" class="blog-area">
                <div class="blog-inner area-padding">
                    <div class="blog-overly"></div>
                    <div class="container ">
                        <div class="row">
                            <?php foreach ($noticias as $key => $noticia) :  
                                if ($key < 6) {
                            ?>
                                <!-- Start Left Blog -->
                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 30px;">
                                    <div class="single-blog">
                                        <div class="single-blog-img">
                                            <a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>">
                                                <img style="object-fit: cover; width: 100%; height: 200px;" src="<?= URL_BASE_FILES . $noticia->imagem ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="date-type">
                                                <a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>">
                                                    <i class="fa fa-calendar"></i><?= $noticia->date ?>
                                                </a>
                                            </span>
                                        </div>

                                        <div class="blog-text">
                                            <a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>">
                                                
                                                <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; height: 80px; margin-bottom: 6px;">
                                                    <h4> <?= $noticia->titulo ?> </h4>
                                                </div>
                                                
                                                
                                                <div style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; height: 90px; margin-bottom: 6px;">
                                                    <p> <?= $noticia->destaque ?> </p>
                                                </div>
                                                
                                            </a>
                                        </div>
                                        <span>
                                            <a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>" class="ready-btn">Ler Mais</a>
                                        </span>
                                    </div>
                                    <!-- Start single blog -->
                                </div>
                                <!-- End Left Blog-->

                            <?php } endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Section -->

            <!-- ======= Testimonials Section ======= -->
            <div class="testimonials-area">
                <div class="testi-inner area-padding">
                    <div class="testi-overly"></div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Start testimonials Start -->
                                <div class="testimonial-content text-center">
                                    <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                                    <!-- start testimonial carousel -->
                                    <div class="owl-carousel testimonial-carousel">
                                        <div class="single-testi">
                                            <div class="testi-text">
                                                <h2 style="color: white;">Missão</h2>
                                                <p>
                                                    Promover a defesa da legalidade democrática, representando o Estado no exercício da acção penal, na protecção dos direitos de pessoas singulares, colectivas e de interesses difusos, na fiscalização da legalidade do exercício da função jurisdicional e na direcção da instrução preparatória dos processos, em prol do Estado Democrático e de Direito.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End single item -->
                                        <div class="single-testi">
                                            <div class="testi-text">
                                                <h2 style="color: white;">Visão</h2>
                                                <p>
                                                    Até 2022 - conquistar o reconhecimento e a credibilidade da sociedade como sendo uma instituição seriamente comprometida com a promoção da justiça, defesa da legalidade e do exercício pleno da cidadania, bem como com o combate ao crime, em geral, a à corrupção, em particular.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End single item -->
                                        <div class="single-testi">
                                            <div class="testi-text">
                                                <h2 style="color: white;">Valores</h2>
                                                <p>
                                                    Autonomia Institucional, legalidade, ética, autonomia Funcional, hierarquia e responsabilidade, unidade, rigor científico e excelência, transparência, proximidade ao cidadão, iniciativa e celeridade.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End single item -->
                                        <div class="single-testi">
                                            <div class="testi-text">
                                                <h2 style="color: white;">Objectivo I</h2>
                                                <p>
                                                    Promover a integridade, transparência e cultura de prestação de contas, bem como melhorar a prestação de serviços na Administração Pública
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End single item -->
                                        <div class="single-testi">
                                            <div class="testi-text">
                                                <h2 style="color: white;">Objectivo II</h2>
                                                <p>
                                                    Promover o envolvimento da sociedade na prevenção e no combate à corrupção
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End single item -->
                                        <div class="single-testi">
                                            <div class="testi-text">
                                                <h2 style="color: white;">Objectivo III</h2>
                                                <p>
                                                    Intensificar a prevenção da corrupção e promover a integridade nos sectores empresariais público e privado
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End single item -->
                                    </div>
                                </div>
                                <!-- End testimonials end -->
                            </div>
                            <!-- End Right Feature -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials Section -->


            <!-- ======= Galeria Section ======= -->
            <div id="portfolio" class="portfolio-area area-padding fix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Galeria</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row awesome-project-content">
                    <?php if (is_array($arquivos)) foreach ($arquivos as $key => $arquivo) : 
                        if (count($arquivos)>6)?>
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 design development">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img style="object-fit: cover; width: 100%; height: 250px;" src="<?= URL_BASE_FILES . $arquivo->imagem?>" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="<?= URL_BASE_FILES . $arquivo->imagem?>">
                                                <!--<h4>PGR</h4>-->
                                                <!--<span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur provident aliquam</span>-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                      
                        <!-- single-awesome-project end -->
                 
                    </div>
                </div>
            </div>
            <!-- End Portfolio Section -->

            <!-- ======= Map Section ======= -->
            <div class="map-area">
                <div class="contact-inner area-padding">
                    <div class="contact-overly"></div>
                    <div class="container ">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-headline text-center">
                                    <h2>Órgãos Provinciais da PGR</h2>
                                </div>
                            </div>
                            <div class="container content">

                                <div class="col-md-12 all-map">
                                    <div class="mapcontainer">

                                        <div class="map">
                                            <span>Carregando o mapa...</span>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Map Section -->
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <?php include('includes/footer.php') ?>
        <!-- End  Footer -->

        <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <div id="preloader"></div> -->


        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/appear/jquery.appear.js"></script>
        <script src="assets/vendor/knob/jquery.knob.js"></script>
        <script src="assets/vendor/parallax/parallax.js"></script>
        <script src="assets/vendor/wow/wow.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>

        <!-- Template Main JS File -->
        <script src="<?= asset('assets/js/main.js') ?>"></script>

        <!-- Section Map -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
        <script src="<?= asset('assets/mapa/jsmap/jquery.mapael.js') ?>" charset="utf-8"></script>
        <script src="<?= asset('assets/mapa/jsmap/maps/angola.js') ?>" charset="utf-8"></script>
        <script src="<?= asset('assets/mapa/jsmap/map.js') ?>" charset="utf-8"></script>
        <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.0/jquery.cookie.min.js"></script>
        <script>
            if (document.querySelectorAll("#ensign-nivoslider img.banner").length < 2) {
                document.getElementsByClassName("nivo-directionNav")[0].style.display = "none";
            }
        </script>
    </body>

    </html>

