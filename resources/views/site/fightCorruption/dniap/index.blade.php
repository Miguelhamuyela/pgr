@extends('layouts.merge.site')
@section('titulo', 'DNIAP')
@section('content')
    <main id="main">


        <!-- ======= {{ $dniap->initials }} Section ======= -->
        <div id="{{ $dniap->initials }}" class="about-area area-padding" style="margin: 150px auto 0px auto !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>{{ $dniap->initials }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="well-middle">
                            <div class="single-well">
                                <div style="text-align: center;">
                                    <h4 class="sec-head">{{ $dniap->title }}</h4>
                                </div>
                                {!! html_entity_decode($dniap->description) !!}

                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End {{ $dniap->initials }} Section -->

    </main>

@endsection
