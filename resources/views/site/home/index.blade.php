@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')
    <main id="main">
        <!-- ======= Slider Section ======= -->
        @if ($slideshows)
            <div id="home" class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">
                        @foreach ($slideshows as $item)
                            <img class="banner" src="/storage/{{ $item->path }}" style="max-height:40px!important"
                                alt="" title="#slider-direction-{{ $item->id }}" />
                        @endforeach

                    </div>
                </div>
            </div>
        @endif
        <!-- End Slider -->



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
                @foreach ($attorney_general as $item)
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 0 auto !important;">
                            <div class="row">

                                <!-- single-well end-->
                                <div>
                                    <div>
                                        <div class="text">
                                            <div
                                                style="-webkit-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);-moz-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);">
                                                <img class="img"
                                                    style="border-radius: 2px;width:50%;float: left; margin: 0px 30px 0px 0px"
                                                    src="/storage/{{ $item->photo }}" alt="">
                                            </div>

                                            <p style="text-align: justify; ">

                                                {!! html_entity_decode($item->description) !!}
                                                <br><br><br>
                                                Sejam todos bem-vindos!

                                            <h4 class="sec-head">{{ $item->name }} </h4>
                                            <p style="margin-top:-10px;font-style: italic;">Procurador Geral da Rep??blica
                                            </p>


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col-->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End About Section -->



        <!-- ======= Team Section ======= -->
        <div id="team" class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Direc????o</h2>
                        </div>
                    </div>
                </div>
                @foreach ($directions_center as $item)
                    @if ($item->office == 'Procurador Geral da Rep??blica')
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
                                        <img style="height: 200px !important;" src="/storage/{{ $item->photo }}" alt="">
                                    </div>
                                    <div class=" col-md-5">
                                        <h4
                                            style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                            H??lder Fernando Pitta Gr??z
                                        </h4>
                                        <div><span
                                                style="font-weight: 700;display: block;clear: both;">{{ $item->office }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="row" style="margin: 30px auto 30px auto;">
                    @foreach ($directions_center as $item)
                        @if ($item->office != 'Procurador Geral da Rep??blica')
                            <div class="col-md-5 first"
                                style="transition: box-shadow .25s;border-radius: 2px;background-color: #fff;  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12); margin: 30px auto 30px auto; ">
                                <div class="row" style="display: flex !important;">
                                    <div class="col-md-6" style="padding: 0!important;">
                                        <img style="height: 165px !important;" src="/storage/{{ $item->photo }}" alt="">
                                    </div>
                                    <div class=" col-md-5">
                                        <h4
                                            style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                            Lu??s de Assun????o Pedro da Mota Liz
                                        </h4>
                                        <div><span
                                                style="font-weight: 700;display: block;clear: both;">{{ $item->office }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach

                </div>
            </div>

            <div class="row"
                style="margin-top: 60px !important; margin-bottom: -30px; display: flex !important;justify-content:center !important;">
                <a href="{{ route('site.whoIsWho') }}">
                    <h6 style="text-align: center; color: #800000;">Ver Todos ></h6>
                </a>
            </div>
        </div>
        </div>
        <!-- End Team Section -->

        <!-- ======= News Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline1 text-center">
                            <h2 style="color: white;">Not??cias</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($news)
            <div id="news" class="blog-area">
                <div class="blog-inner area-padding">
                    <div class="blog-overly"></div>
                    <div class="container ">
                        <div class="row">
                            @foreach ($news as $item)
                                <!-- Start Left Blog -->
                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 30px;">
                                    <div class="single-blog">
                                        <div class="single-blog-img">
                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                <img style="object-fit: cover; width: 100%; height: 200px;"
                                                    src="/storage/{{ $item->path }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="date-type">
                                                <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                                    <i
                                                        class="fa fa-calendar"></i>{{ date('d-m-Y', strtotime($item->date)) }}
                                                </a>
                                            </span>
                                        </div>

                                        <div class="blog-text">
                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">

                                                <div
                                                    style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; height: 80px; margin-bottom: 6px;">
                                                    <h4> {{ $item->title }}</h4>
                                                </div>


                                                <div
                                                    style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; height: 90px; margin-bottom: 6px;">
                                                    <p>{!! html_entity_decode(mb_substr($item->body, 0, 200, 'UTF-8')) !!}...</p>
                                                </div>

                                            </a>
                                        </div>
                                        <span>
                                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}" class="ready-btn">Ler Mais</a>
                                        </span>
                                    </div>
                                    <!-- Start single blog -->
                                </div>
                                <!-- End Left Blog-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- End News Section -->

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
                                            <h2 style="color: white;">Miss??o</h2>
                                            <p>
                                                Promover a defesa da legalidade democr??tica, representando o Estado no
                                                exerc??cio da ac????o penal, na protec????o dos direitos de pessoas singulares,
                                                colectivas e de interesses difusos, na fiscaliza????o da legalidade do
                                                exerc??cio da fun????o jurisdicional e na direc????o da instru????o preparat??ria
                                                dos processos, em prol do Estado Democr??tico e de Direito.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <h2 style="color: white;">Vis??o</h2>
                                            <p>
                                                At?? 2022 - conquistar o reconhecimento e a credibilidade da sociedade como
                                                sendo uma institui????o seriamente comprometida com a promo????o da justi??a,
                                                defesa da legalidade e do exerc??cio pleno da cidadania, bem como com o
                                                combate ao crime, em geral, a ?? corrup????o, em particular.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <h2 style="color: white;">Valores</h2>
                                            <p>
                                                Autonomia Institucional, legalidade, ??tica, autonomia Funcional, hierarquia
                                                e responsabilidade, unidade, rigor cient??fico e excel??ncia, transpar??ncia,
                                                proximidade ao cidad??o, iniciativa e celeridade.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <h2 style="color: white;">Objectivo I</h2>
                                            <p>
                                                Promover a integridade, transpar??ncia e cultura de presta????o de contas, bem
                                                como melhorar a presta????o de servi??os na Administra????o P??blica
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <h2 style="color: white;">Objectivo II</h2>
                                            <p>
                                                Promover o envolvimento da sociedade na preven????o e no combate ?? corrup????o
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <h2 style="color: white;">Objectivo III</h2>
                                            <p>
                                                Intensificar a preven????o da corrup????o e promover a integridade nos sectores
                                                empresariais p??blico e privado
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
                    @foreach ($galleries as $item)
                        <!-- single-gallery start -->
                        <div class="col-12 col-md-4 col-lg-4 design development">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img style="object-fit: cover; width: 100%; height: 250px;"
                                            src="/storage/{{ $item->cover }}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery"
                                                href="/storage/{{ $item->cover }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-gallery end -->
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End gallery Section -->

        <!-- ======= Map Section ======= -->
        <div class="map-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>??rg??os Provinciais da PGR</h2>
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



@endsection
@section('JS')
    <!-- Section Map -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8">
    </script>
    <script src="/site/mapa/jsmap/jquery.mapael.js" charset="utf-8"></script>
    <script src="/site/mapa/jsmap/maps/angola.js" charset="utf-8"></script>
    <script src="/site/mapa/jsmap/map.js" charset="utf-8"></script>
    <script src="/site/js/HttpRequest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.0/jquery.cookie.min.js"></script>
    <script>
        if (document.querySelectorAll("#ensign-nivoslider img.banner").length < 2) {
            document.getElementsByClassName("nivo-directionNav")[0].style.display = "none";
        }
    </script>

@endsection
