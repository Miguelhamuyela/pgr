@extends('layouts.merge.site')
@section('titulo', 'Quem é Quem')
@section('content')

    <main id="main">


        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 150px auto 0px auto !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="section-headline text-center">
                            <h2>Quem é Quem</h2>
                        </div>
                    </div>
                </div>

                <h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding"
                    style="border-bottom: 1px solid #eee;padding:20px;">
                    Direcção Central
                </h3>
                @foreach ($directions_center as $item)
                    @if ($item->office == 'Procurador Geral da República')
                        <div class="row team-row" style="margin: 30px auto 30px auto;">

                            <div class="col-md-6 first"
                                style="  transition: box-shadow .25s;   border-radius: 2px;
       background-color: #fff;  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12); margin: 30px auto 30px auto;   ">
                                <div class="row" style="display: flex !important;">
                                    <div class="col-md-6" style="padding: 0!important;">
                                        <img style="height: 200px !important;" src="/storage/{{ $item->photo }}" alt="">
                                    </div>
                                    <div class=" col-md-5">
                                        <h4
                                            style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                            {{ $item->name }}
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
                        @if ($item->office != 'Procurador Geral da República')
                            <div class="col-md-5 first"
                                style="transition: box-shadow .25s;border-radius: 2px;background-color: #fff;  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12); margin: 30px auto 30px auto; ">
                                <div class="row" style="display: flex !important;">
                                    <div class="col-md-6" style="padding: 0!important;">
                                        <img style="height: 165px !important;" src="/storage/{{ $item->photo }}" alt="">
                                    </div>
                                    <div class=" col-md-5">
                                        <h4
                                            style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                            {{ $item->name }}
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

            <h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding"
                style="border-bottom: 1px solid #eee;padding:20px;">
                Órgãos Nacionais
            </h3>
            <div class="row" style="margin: 30px auto 30px auto;">
                <!-inicio->
                    @foreach ($directions_nacionaty as $item)
                        <div class="col-md-5 first" style="transition: box-shadow .25s;border-radius: 2px;background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);margin: 30px auto 30px auto;
    ">
                            <div class="row" style="">
                                <div class="col-md-6"
                                    style="padding: 0!important; display: flex !important;justify-content:center !important;align-items:center !important;">
                                    <img style="width: 200px;height: 165px !important;" src="/storage/{{ $item->photo }}"
                                        alt="">
                                </div>
                                <div class=" col-md-5">
                                    <h4
                                        style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                        {{ $item->name }}
                                    </h4>
                                    <div><span style="font-weight: 700;display: block;clear: both;">cargo</span>
                                        <div
                                            style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;margin-top:10px;">
                                            {{ $item->office }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-fim->


            </div>

            <h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding"
                style="border-bottom: 1px solid #eee;padding:20px;">
                Órgãos Regionais
            </h3>
            <div class="row" style="margin: 30px auto 30px auto;">
                @foreach ($directions_Regionals as $item)
                    <div class="col-md-5 first" style="transition: box-shadow .25s;border-radius: 2px;background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);margin: 30px auto 30px auto;
            ">
                        <div class="row" style="">
                            <div class="col-md-6"
                                style="padding: 0!important; display: flex !important;justify-content:center !important;align-items:center !important;">
                                <img style="width: 200px;height: 165px !important;" src="/storage/{{ $item->photo }}"
                                    alt="">
                            </div>
                            <div class=" col-md-5">
                                <h4
                                    style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                    {{ $item->name }}
                                </h4>
                                <div><span style="font-weight: 700;display: block;clear: both;">cargo</span>
                                    <div
                                        style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;margin-top:10px;">
                                        {{ $item->office }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <div id="Benguela" id="sub-p">
                <h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding"
                    style="border-bottom: 1px solid #eee;padding:20px;">
                    Orgãos Provinciais
                </h3>
                <div>

                    <div class="row" style="margin: 30px auto 30px auto;">
                        @foreach ($directions_provincials as $item)
                            <div class="col-md-5 first"
                                style="   transition: box-shadow .25s; border-radius: 2px; background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);margin: 30px auto 30px auto;">
                                <div class="row" style="display: flex !important;">
                                    <div class="col-md-6" style="padding: 0!important;">
                                        <img style="width: 100% !important;height: 200px !important;"
                                            src="/storage/{{ $item->photo }}" alt="">
                                    </div>
                                    <div class=" col-md-5">
                                        <h4
                                            style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                                            {{ $item->name }}
                                        </h4>
                                        <div>
                                            <span style="font-weight: 700;display: block;clear: both;">cargo</span>
                                            <div
                                                style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;margin-top:10px;">
                                                {{ $item->office }}
                                            </div>
                                            <br>

                                            <div style="display: flex !important;">
                                                <div style="line-height: 110%;font-weight: 400;font-size: 15px;">
                                                    Província:
                                                </div>
                                                <div
                                                    style="margin-left:5px;color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">
                                                    Benguela
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <!-- End About Section -->

    </main>
@endsection
