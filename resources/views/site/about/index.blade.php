@extends('layouts.merge.site')
@section('titulo', 'Sobre')
@section('content')

    <main id="main">

        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" data-ride="carousel" style="margin: 150px auto 0px auto !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Sobre</h2>
                        </div>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                         xcvxcvx
                            <div class="row">
                                <!-- single-well start-->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="well-left">
                                        <div class="single-well"
                                            style="-webkit-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);-moz-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);">

                                            <img style="object-fit: cover; width: 100%; height: 270px; border-radius: 2px;"
                                                src="" alt="">

                                        </div>
                                    </div>
                                </div>
                                <!-- single-well end-->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="well-middle">
                                        <div class="single-well">

                                            <h4 class="sec-head">Titulo</h4>

                                            <p>
                                                iformações</p>
                                            <ul>
                                                <li>
                                                    <a href="/site/docs/organograma.pdf" target="_blank"><i
                                                            class="fa fa-check"></i>Organograma</a>
                                                </li>
                                                <!-- <li>
                                                        <a href="<?= asset('assets/docs/RevistaMagazine.pdf') ?>" target="_blank"><i class="fa fa-check"></i>Revista_MAGAZINE PGR_02_2020</a>
                                                    </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <!-- End col-->
                            </div>
                        </div>
                        EDIFÍCIO-SEDE
                        <div class="carousel-item">

                            <div class="row">
                                <!-- single-well start-->


                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="well-left">
                                        <div class="single-well"
                                            style="-webkit-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);-moz-box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);box-shadow: -1px 3px 8px 0px rgba(0,0,0,0.63);">

                                            <img style="object-fit: cover; width: 100%; height: 270px; border-radius: 2px;"
                                                src="" alt="">

                                        </div>
                                    </div>
                                </div>
                                <!-- single-well end-->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="well-middle">
                                        <div class="single-well">


                                            <p>
                                               descrição </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col-->
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>

                    </div>

                </div>
            </div>
        </div>
        <!-- End About Section -->

    </main>


@endsection
