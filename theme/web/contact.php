<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PGR - dnpcc</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('assets/img/favi.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('assets/img/favi.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('assets/img/favi.png') ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

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

    <main id="main">


            <!-- ======= Contact Section ======= -->
            <div id="contact" class="contact-area" style="margin: 150px auto 0px auto !important;">
                <div class="contact-inner area-padding">
                    <div class="contact-overly"></div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-headline text-center">
                                    <h2>Contacte-nos</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Start contact icon column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="fa fa-mobile"></i>
                                        <p>
                                            Telefone:<br/> +244 222 333 172 / +244 222 333 170<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start contact icon column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="fa fa-envelope-o"></i>
                                        <p>
                                            Email: <br/>procuradoriageraldarepublica@pgr.ao<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start contact icon column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="fa fa-map-marker"></i>
                                        <p>
                                            Localização: Rua 17 de Setembro, Palácio da Justiça, 4°, 5° e 6º andares.<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Start Google Map -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- Start Map -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.630017221284!2d13.225282914785135!3d-8.820784693665475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f35c55658fe5%3A0x44e62b394337ff60!2sProcuradoria%20Geral%20da%20Rep%C3%BAblica!5e0!3m2!1spt-PT!2sao!4v1601545530612!5m2!1spt-PT!2sao" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <!-- End Map -->
                            </div>
                            <!-- End Google Map -->

                            <!-- Start  contact -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form contact-form">
                                    <form id="store" action="<?= $router->route('contactos.create') ?>">
                                        <div class="form-group">
                                            <input type="text" name="nome" class="form-control" id="name" placeholder="Nome Completo" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres" />
                                            <div class="validate"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor digite um email válido" />
                                            <div class="validate"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="assunto" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Insira pelo menos 8 caracteres do assunto" />
                                            <div class="validate"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="mensagem" rows="5" data-rule="required" data-msg="Por favor escreva algo para nós" placeholder="Mensagem"></textarea>
                                            <div class="validate"></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="ready-btn">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Left contact -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Section -->

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