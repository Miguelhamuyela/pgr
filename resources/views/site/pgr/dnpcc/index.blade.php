@extends('layouts.merge.site')
@section('titulo', 'DNPCC')
@section('content')
    <main id="main">


        <!-- ======= {{ $dnpcc->initials }} Section ======= -->
        <div id="{{ $dnpcc->initials }}" class="about-area area-padding" style="margin: 150px auto 0px auto !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>{{ $dnpcc->initials }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="well-middle">
                            <div class="single-well">
                                <div style="text-align: center;">
                                    <h4 class="sec-head">{{ $dnpcc->title }}</h4>
                                </div>
                                {!! html_entity_decode($dnpcc->description) !!}
                           
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End {{ $dnpcc->initials }} Section -->

    </main>


@endsection
