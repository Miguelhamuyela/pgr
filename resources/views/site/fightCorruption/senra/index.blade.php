@extends('layouts.merge.site')
@section('titulo', ' Senra')
@section('content')
    <main id="main">

        <!-- ======= {{ $senra->initials }} Section ======= -->
        <div id="{{ $senra->initials }}" class="about-area area-padding" style="margin: 150px auto 0px auto !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>{{ $senra->initials }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="well-middle">
                            <div class="single-well">
                                <div style="text-align: center;">
                                    <h4 class="sec-head">{{ $senra->title }}</h4>
                                </div>
                                <p style="text-align: justify;">
                                    {!! html_entity_decode($senra->description) !!}
                                </p>

                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End {{ $senra->initials }} Section -->

    </main>


@endsection
