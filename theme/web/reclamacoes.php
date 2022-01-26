<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PGR - Reclamações</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('assets/img/favi.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('assets/img/favi.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('assets/img/favi.png') ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="<?= asset('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/nivo-slider/css/nivo-slider.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= asset('assets/css/style.css') ?>" rel="stylesheet">

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

        @media (max-width: 767px) {
            header .logo-composition {
                font-size: 14px;
            }

            header .logo-composition .domain-composition::before {
                height: 70%;
            }
        }
    </style>

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <!-- ======= Header ======= -->
    <?php include('includes/header.php') ?>
    <!-- End Header -->

    <!-- ======= Blog Header ======= -->
    <div class="header-bg2 page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="height: 70vh !important;">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                <!-- <h2 class="title3">Procuradoria Geral da República de Angola</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Header -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 0 auto !important;">
            <div class="container">

                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto 20px auto !important;">
                                <div class="section-headline text-center">
                                    <h2>Reclamação</h2>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-10" style="margin: 0 auto 50px auto; padding: 0px 27px;">
                                <div class="well-middle">
                                    <div class="single-well">
                                        <h4 class="sec-head">Registo de uma nova reclamação</h4>
                                        <p>
                                            Espaço de interação com os utentes dos serviços da PGR, para Exposições/Reclamações e Recursos Hierárquicos em que os dados de identificação são obrigatórios, sem qualquer possibilidade de anonimização, e um único espaço no formulário para que se apresente
                                            em detalhe os factos, se identifiquem os números do processos ou as referências, as partes envolvidas e pedido de intervenção da PGR.
                                        </p>
                                        <h4 class="sec-head" style="margin: 10px 0px;">Para apresentar a sua reclamação, preencha o formulário abaixo</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-secondary">
                                    <div class="panel-body">
                                        <ul class="nav nav-pills"></ul>
                                        <form class='tab-content formulario' id='store' action='<?= $router->route("ReclamacoesController.create") ?>' method='POST' enctype='multipart/form-data'>
                                            <div class='col-md-10' style="margin: 0 auto !important;">
                                                <p>
                                                    <label for='campo_208'>Nome<font color=red>&nbsp;*</font></label><input type='text' name='nome' class='form-control' placeholder=''></p>
                                                <p>
                                                    <label for='campo_213'>E-mail<font color=red>&nbsp;*</font></label><input type='email' name='email' class='form-control' value='' placeholder=''></p>
                                                <p>
                                                    <label for='campo_209'>Telemóvel<font color=red>&nbsp;*</font></label><br /><input type='number' name='telefone' class='form-control' value='' placeholder='' size=20 maxlength=20 style='letter-spacing: 1.7px; display:block;'>
                                                </p>
                                                <p>
                                                    <label for='campo_210'>Nº de Protocolo<font color=red>&nbsp;*</font></label><input type='number' name='n_protocolo' class='form-control' value='' placeholder=''></p>
                                                <p>
                                                    <label for='campo_211'>Reclamação<font color=red>&nbsp;*</font></label><textarea type='textarea' name='reclamacao' class='form-control' placeholder=''></textarea>
                                                </p>

                                                <button style="border-color: #800000 !important; background-color: #800000 !important;" class="btn btn-primary" id="btn-submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End About Section -->

    </main>
    <!-- End #main -->

    <?php include('includes/footer.php') ?>

    <!-- Vendor JS Files -->
    <script src="<?= asset('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= asset('assets/vendor/appear/jquery.appear.js') ?>"></script>
    <script src="<?= asset('assets/vendor/knob/jquery.knob.js') ?>"></script>
    <script src="<?= asset('assets/vendor/parallax/parallax.js') ?>"></script>
    <script src="<?= asset('assets/vendor/wow/wow.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/nivo-slider/js/jquery.nivo.slider.js') ?>"></script>
    <script src="<?= asset('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= asset('assets/vendor/venobox/venobox.min.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>

</body>

</html>