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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #800000;
        }

        @media only screen and (max-width: 768px) {
            .mapcontainer {
                align-content: center;
            }

            .map {
                max-width: 100%;
            }

            .header {
                width: 100%;
                display: block;
            }

            .inp {
                width: 91% !important;
                margin: 5px auto;
            }

            .logo {
                width: 100% !important;
            }

            #header {
                display: none;
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
        #lo{
            margin-left: 150px;
        }
    </style>


</head>

<body data-target="#navbar-example">


    <div style=" background-color: white; position: fixed; top: 0; border-bottom: 1px solid black; right: 0;left: 0; z-index: 1030;">
        <!-- ======= Header1 ======= -->
        <div class="container st" style="padding-right: 0px !important; padding-left: 0px !important; flex-wrap: wrap;">
            <header class="header">
                <div class="container d-flex logo" style="width: 70%; display: flex; justify-content: center; align-items: center;">
                    <div class="logo mr-auto">
                        <a class="navbar-brand text-light" href="<?= $router->route('index') ?>">
                            <div class="logo-composition">
                                <img style="padding: 10px; padding-left: 0px; margin-top:20px; width: 280px !important;" src="<?= asset('assets/img/log_pgr.png') ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                
                
                
                  <div class="inp" style="width: 40%; display: flex; justify-content: center; align-items: center;">
                <form action="<?= $router->route('pesquisar_noticias') ?>" method="post">
                    <div class="input-group">
                   
                            <input id="pesquisar_noticias" type="text" name="pesquisar_noticias" class="form-control" placeholder="Pesquisar">
                            <div class="input-group-append">
 
                                <button id="search-btn" class="btn btn-secondary" type="submit" style="background-color: #800000;">
                                    <i class="fa fa-search"></i>
                                </button>

                            </div>
 
                    </div>
                    </form>
                </div>

            </header>
        </div>
        <!-- End Header1 -->

        <!-- ======= Header2 ======= -->
        <header id="header">
            <div class="container d-flex" style="width: 100%; display: flex; justify-content: center; align-items: center;">

                <nav class="nav-menu d-none d-lg-block" style="display: flex; justify-content: center; align-items: center;">
                    <ul>

                        <li><a href="<?= $router->route('index') ?>#">Início</a></li>
                        <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu1`);">Institucional</a>
                            <ul class="menu1">
                                <li><a href="<?= $router->route('sobrepage') ?>">Sobre a PGR</a></li>
                                <li><a href="<?= $router->route('membrospage') ?>">Quem é Quem</a></li>
                                <!-- Novo Submenu
                                    <li><a href="javascript:void(0);">Órgãos PGR</a></li>
                                    Fim do Novo Submenu -->
                               
                            </ul>
                        </li>

                        <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu2`);">Para o Cidadão</a>
                            <ul class="menu2">
                                <li><a href="<?= $router->route('denunciaspage') ?>">Denúncias</a></li>

                                <li><a href="<?= $router->route('reclamacoespage') ?>">Reclamações</a></li>
                            </ul>
                        </li>
                        <!-- Novo Menu -->
                        <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu3`);">Combate a Corrupção</a>
                            <ul class="menu3">
                                <li><a href="<?= $router->route('dnpccpage') ?>">DNPCC</a></li>
                                <li><a href="<?= $router->route('dniappage') ?>">DNIAP</a></li>
                                <li><a href="<?= $router->route('senrapage') ?>">SENRA</a></li>
                                <!--<li><a href="<?= $router->route('pgrsicpage') ?>">PGR-SIC</a></li>-->
                            </ul>
                        </li>
                        <!-- Fim do Novo Menu -->

                        <li><a href="<?= $router->route('noticiaspage') ?>">Notícias</a></li>


                        <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu4`);">Documentos</a>
                            <ul class="menu2">
                                <li><a href="<?= $router->route('legislacoespage') ?>">Legislações</a></li>

                                <li><a href="<?= $router->route('comunicados') ?>">Comunicados</a></li>
                                <li><a href="<?= $router->route('publicacoes') ?>">Publicações</a></li>
                                <li><a href="<?= $router->route('r_anuais') ?>">Relatórios Anuais</a></li>
                                <li><a href="<?= $router->route('outros_doc') ?>">Outros Documentos</a></li>
                            </ul>
                        </li>






                        
                        <li><a href="<?= $router->route('contactpage') ?>">Contactos</a></li>
                        <li><a href="https://webmail.pgr.ao/" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
                <!-- .nav-menu -->

            </div>
        </header>
        <!-- End Header2 -->
    </div>


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

    <script>
        function setUrl() {
            let key = document.getElementById("search-input").value;

            window.location.href = `http://localhost/pgr/denunciar?search_key=${key}#rowTo#r`;

        }
        document.getElementById("search-btn").addEventListener("click", function() {
            setUrl();
        });
    </script>

</body>

</html>