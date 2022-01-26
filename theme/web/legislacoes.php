<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PGR - Legislações</title>
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
    <div class="header-bg page-area">
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
                                <div class="section-headline text-center">
                                    <h2>Publicações</h2>
                                </div>
                            </div>
                 
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="well-middle">
                            <div class="single-well">
                                <h4 class="sec-head">Pode consultar e descarregar aqui documentos relevantes: </h4>
                                <p>
                           <b> Legislação  </b>
                                </p>
                                <ul>
                                <?php
                    if (is_array($anexos)) foreach ($anexos as $key => $anexo) :
                        if ($anexo->id_info == 4) :
                    ?>
                    
                    
                                <tr>

                                <div>
           
            <td style="width: 700px;"><a href="<?= URL_BASE_FILES . $anexo->src ?>" target="_blank"><i class="fa fa-check"></i><?= $anexo->titulo ?></a></td>
            <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
               
            </td>
            </div>
        </tr>
        <?php endif;
                    endforeach; ?>
                                </ul>
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

</body>

</html>