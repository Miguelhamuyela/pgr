<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PGR - Denúncias</title>
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

<body data-spy="scroll" data-target="#navbar-example"  onload="getDenuncias('<?= $router->route('denuncias.consultar') ?>')">

    <!-- ======= Header ======= -->
    <?php include('includes/header.php') ?>
    <!-- End Header -->

    <!-- ======= Blog Header ======= -->
    <div class="header-bg1 page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="height: 70vh !important;">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
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
                    <div id="rowTo" class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto 50px auto !important;">
                        <div class="section-headline text-center">
                            <h2>Denúncias</h2>
                            <!-- search option start -->
                            <div class="search-option" style="width: 85%;margin: 0 auto !important;">
                                <input style="background: #f9f9f9;" type="text" onkeypress="event.keyCode == 13 && getDenuncias('<?= $router->route('denuncias.consultar') ?>')" id="processo" placeholder="Consultar Denúncia..." value="<?= isset($_GET["search_key"])? $_GET["search_key"] : '' ?>">
                                <input id="searchKey" hidden type="text" value="<?= isset($_GET["search_key"]) ? $_GET["search_key"] : "" ?>">
                                <button class="button" onclick="getDenuncias('<?= $router->route('denuncias.consultar') ?>')">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <!-- search option end -->
                        </div>
                    </div>

                </div>
                <div id="resultDenuncia">

                </div>

                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="col-md-10" style="margin: 0 auto 50px auto; padding: 0;">
                            <div class="single-well">
                                <h4 class="sec-head">Apresentação de uma nova denúncia</h4>
                                <p>
                                    O autor da comunicação pode manter o anonimato. No entanto privilegia-se que se identifique, sendo nossa preocupação que não venha a ser desnecessariamente exposto publicamente durante a investigação.
                                </p>
                            </div>
                            <h4 class="sec-head">Para apresentar, preencha o formulário abaixo</h4>
                        </div>

                        <form action="<?= $router->route('denuncias.create') ?>" id="store">
                            <div class="row d-flex justify-content-center">
                                <div class='col-md-10'>
                                    <fieldset style="margin-bottom: 50px;">
                                        <legend>Dados do Denunciante</legend>
                                        <p>
                                            <label for='campo_202'>Nome</label><input type='text' name='Nome_denunciante' id='campo_202' class='form-control' value='' placeholder=''></p>
                                        <p>
                                            <label for='campo_203'>Email</label><input type='email' name='email' id='campo_203' class='form-control' value='' placeholder=''></p>
                                        <p>
                                            <label for='campo_204'>Telefone</label><input type='number' name='telefone' id='campo_204' class='form-control' value='' placeholder=''></p>

                                    </fieldset>
                                    <fieldset>
                                        <legend>Dados da Denúncia</legend>
                                        <p>
                                            <label for='campo_194'>Em que sector de actividade ocorreu a corrupção ou fraude?
                                                <font color=red>&nbsp;*</font>
                                            </label>
                                            <label for=''></label>
                                            <select type='combo' name='sectores_actividade' id='campo_194' class='form-control'>
                                                <option value='' SELECTED>Seleccione</option>
                                                <?php foreach ($sectoresActividades as $sectorActividade) : ?>
                                                    <option value='<?= $sectorActividade->id ?>'><?= $sectorActividade->nome ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </p>
                                        <p>
                                            <label for='campo_195'>Actos de corrupção ou fraude<font color=red>&nbsp;*</font></label><textarea type='textarea' name='actos_corrupcao' id='campo_195' class='form-control' placeholder=''></textarea><i>Narre os factos de que tem conhecimento com o maior detalhe possível, incluindo locais, pessoas e empresas envolvidas, modo de actuar, se foram feitos pagamentos e como, através de que meios, contas bancárias e titulares, procurando ser objectivo</i></p>
                                        <p>
                                            <label for='campo_196'>Datas ou períodos em que ocorreram os factos<font color=red>&nbsp;*</font></label><input type='text' name='periodos_factos' id='campo_196' class='form-control' value='' placeholder=''><i>Exemplo: em 30 Julho de 2009, em finais de Julho de 2009, entre 15 e 30 de Julho de 2009, em Agosto de 2009, em meados de 2009, em 2009, entre Janeiro e Março de 2009, a situação vem-se repetindo desde há cerca de 2 anos, etc... </i></p>
                                        <p>
                                            <label for='campo_197'>Identificação dos suspeitos<font color=red>&nbsp;*</font></label><textarea type='textarea' name='suspeitos' id='campo_197' class='form-control' placeholder=''></textarea><i>Indique todos os dados que sabe sobre as pessoas e empresas envolvidas na corrupção ou fraude, local de trabalho, profissão, residência, pessoas das suas relações, contactos, veículos automóveis, outras propriedades, etc.</i></p>
                                        <p>
                                            <label for='campo_198'>Como tomou conhecimento dos factos?<font color=red>&nbsp;*</font></label><textarea type='textarea' name='conhecimento_factos' id='campo_198' class='form-control' placeholder=''></textarea><i>Diga se ouviu alguém e, nesse caso, a quem, falar dos factos, se os presenciou, se os leu em algum documento</i></p>
                                        <p>
                                            <label for='campo_199'>Valor aproximado das quantias envolvidas</label><input type='number' name='valor_envolvido' id='campo_199' class='form-control' value='' placeholder=''><i>Se não houver entrega/recebimento de dinheiro, indique uma estimativa do valor dos bens em causa</i></p>
                                        <p>
                                            <label for='campo_200'>Outras pessoas que têm conhecimento dos factos ou podem ajudar a esclarecê-los</label><textarea type='textarea' name='ajudantes' id='campo_200' class='form-control' placeholder=''></textarea><i>Identifique outras pessoas que possam auxiliar a investigação, dando informações ou prestando testemunho</i></p>
                                        <p>
                                            <label for='campo_201'>Documentos e outras provas que fundamentam a sua denúncia</label><textarea type='textarea' name='provas' id='campo_201' class='form-control' placeholder=''></textarea><i>Indique se possui ou onde se encontram documentos que pensa serem relevantes para a prova. Se os tiver digitalizado, envie-os através da função abaixo "Anexar ficheiro". Se preferir, pode enviá-los por correio para a morada da PGR.</i></p>
                                        <p>
                                            <label for='campo_212'>Ficheiro anexo</label><input type='file' multiple data-height='120px' name='documentos[]' id='campo_212' class='dropify form-control' value='' data-default-file='' placeholder='' data-show-errors='true' data-show-remove='false'><i>Pode submeter ficheiros de imagem ou PDF.</i></p>
                                    </fieldset>
                                    <button style="margin-top: 30px;border-color: #800000 !important; background-color: #800000 !important;" class="btn btn-primary" id="btn-submit">Enviar</button>
                                </div>

                            </div>
                        </form>
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
    <script>

    </script>
</body>

</html>