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

        @media only screen and (max-width: 768px) {
            .mapcontainer {
                align-content: center;
            }

            .map {
                max-width: 100%;
            }
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
    <header id="header" class="fixed-top" style="background-color: white;">
        <div class="container d-flex">
            <div class="logo mr-auto">
                <a class="navbar-brand text-light" href="<?= $router->route('index') ?>">
                    <div class="logo-composition">
                        <img style="margin-top:10px;" src="<?= asset('assets/img/logo_black_hand.png') ?>" alt="">
                        <span class="domain-composition">
                            <span class="domain-name" style="font-size: 28px !important;">pgr</span>
                            <span class="domain-top-level" style="font-size: 28px !important;margin-left: -2px;font-weight: 700 !important;">.ao</span>
                            <span class="domain-full-title">Procuradoria Geral da República</span>
                        </span>
                    </div>
                </a>
            </div>

        </div>
    </header>
    <!-- End Header -->


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

    <!-- Section Map -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
    <script src="<?= asset('assets/mapa/jsmap/jquery.mapael.js') ?>" charset="utf-8"></script>
    <script src="<?= asset('assets/mapa/jsmap/maps/angola.js') ?>" charset="utf-8"></script>
    <script src="<?= asset('assets/mapa/jsmap/map.js') ?>" charset="utf-8"></script>

</body>

</html>