<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PGR - Notícias</title>
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

    .ImgNotice{
      object-fit: cover; 
      width: 100%; 
      height: 400px;

      
    }
    @media only screen and (max-width: 426px){
        .ImgNotice{
          object-fit: cover; 
          width: 100%; 
          height: 200px;
        }
    }
  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <?php include('includes/header.php') ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg4 page-area">
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

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
            <div class="section-headline text-center">
              <h2>Notícias Recentes</h2>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-10">
            <div class="row">
              <?php foreach ($noticias as  $noticia) : ?>
                <!-- Start Left Blog -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img class="ImgNotice" src="<?= URL_BASE_FILES . $noticia->imagem ?>" alt="">
                        </div>
                        <div class="blog-meta">
                            <span class="date-type">
                                <i class="fa fa-calendar"></i><?= $noticia->date ?>
                            </span>
                        </div>
                        <div class="blog-text">
                            <h4>
                            <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                <?= $noticia->titulo ?>
                            </div>
                            </h4>
                            <p style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                                <?= $noticia->destaque ?>
                            </p>
                        </div>
                        <span>
                            <a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>" class="ready-btn">Ler Mais</a>
                        </span>
                    </div>
                    <!-- Start single blog -->
                </div>
                <!-- End Left Blog-->
                
              <?php endforeach; ?>
              
            </div>
          </div>
          <!-- Right sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Pesquisar...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>Notícias Mais Lidas</h4>
                  <div class="recent-post">
                  <?php if (is_array($noticias)) foreach ($noticias as $key => $noticia) : 
                    if ($key < 4) {  
                  ?>
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>">
                          <img src="<?= URL_BASE_FILES . $noticia->imagem ?>" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="<?= URL_BASE ?>/noticia_detalhes/<?= $noticia->id ?>"><div style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;"><?= $noticia->destaque ?></div></a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <?php } endforeach; ?>
                  </div>
                </div>
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>Comunicados</h4>
                  <div class="recent-post">
                    <?php if (is_array($comunicados)) foreach ($comunicados as $key => $comunicado) : 
                      if ($key < 4) {  
                    ?>
                      <!-- start single post -->
                      <div class="recent-single-post">
                        
                        <div class="pst-content">
                          <p><a href="#"><?= $comunicado->descricao ?></a></p>
                        </div>
                      </div>
                      <!-- End single post -->
                    
                  </div>
                </div>
                <!-- recent end -->
              </div>
              <!-- Anúncio -->
              <h4>Anúncios</h4>
              <div>
               
              </div>
              <!-- End Anúncio -->
            </div>
            <?php } endforeach; ?>
          </div>
          <!-- End Right sidebar -->
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
  
          <!-- Section Map -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
        <script src="<?= asset('assets/mapa/jsmap/jquery.mapael.js') ?>" charset="utf-8"></script>
        <script src="<?= asset('assets/mapa/jsmap/maps/angola.js') ?>" charset="utf-8"></script>
        <script src="<?= asset('assets/mapa/jsmap/map.js') ?>" charset="utf-8"></script>
        
        <script src="<?= asset('js/HttpRequest.js') ?>"></script>
      <script src="<?= asset('js/alert.js') ?>"></script>
</body>

</html>