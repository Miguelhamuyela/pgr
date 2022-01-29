<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <title>Procuradoria Geral da República - @yield('titulo')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Portal Oficial da Procuradoria Geral da República" />
    <meta name="description" content="Portal Oficial da Procuradoria Geral da República" />
    <meta name="keywords" content="Portal Oficial da Procuradoria Geral da República" />

    <meta property="og:title" content=" Procuradoria Geral da República, Eleições, Partidos Políticos" />
    <meta property="og:site_name" content="Portal Oficial da Procuradoria Geral da República" />
    <meta property="og:description" content="Portal Oficial da Procuradoria Geral da República" />
    <meta property="og:type" content="article" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/site/img/favi.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/site/img/favi.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/site/img/favi.png">


    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Vendor CSS Files -->
    <link href="/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/site/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/site/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/site/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/site/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="/site/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/site/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/site/css/style.css" rel="stylesheet">

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

        #lo {
            margin-left: 150px;
        }

    </style>


</head>

<body data-target="#navbar-example">


   

