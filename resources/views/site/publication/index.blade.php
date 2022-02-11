@extends('layouts.merge.site')
@section('titulo', ' Publicações')
@section('content')

    <main id="main">

        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 0 auto !important;">
            <div class="container">
                <div class="row">

                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>Publicações</h2>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="well-middle">
                            <div class="single-well">
                                <h4 class="sec-head">Pode consultar e descarregar aqui documentos relevantes: </h4>
                                <p>
                                    <b> Publicações </b>
                                </p>
                                <ul>



                                    <tr>
                                        @foreach ($publications as $item)
                                            <div <td style="width: 700px;"><a href="/storage/{{ $item->file }}"
                                                    target="_blank"><i class="fa fa-check"></i>{{ $item->title }}</a>
                                                </td>
                                                <td
                                                    style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">

                                                </td>
                                            </div>
                                        @endforeach
                                    </tr>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->

                </div>
            </div>
        </div>
        <!-- End About Section -->

    </main>
@endsection
