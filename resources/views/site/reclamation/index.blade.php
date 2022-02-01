@extends('layouts.merge.site')
@section('titulo', 'Reclamação')
@section('content')

    <main id="main">
        <!-- ======= Blog Header ======= -->
        <div class="header-bg2 page-area">
            <div class="home-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="height: 70vh !important;">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <!-- <h2 class="title3">Procuradoria Geral da República de Angola</h2> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Header -->



        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 0 auto !important;">
            <div class="container">

                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto 20px auto !important;">
                                <div class="section-headline text-center">
                                    <h2>Reclamação</h2>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-10" style="margin: 0 auto 50px auto; padding: 0px 27px;">
                                <div class="well-middle">
                                    <div class="single-well">
                                        <h4 class="sec-head">Registo de uma nova reclamação</h4>
                                        <p>
                                            Espaço de interação com os utentes dos serviços da PGR, para
                                            Exposições/Reclamações e Recursos Hierárquicos em que os dados de identificação
                                            são obrigatórios, sem qualquer possibilidade de anonimização, e um único espaço
                                            no formulário para que se apresente
                                            em detalhe os factos, se identifiquem os números do processos ou as referências,
                                            as partes envolvidas e pedido de intervenção da PGR.
                                        </p>
                                        <h4 class="sec-head" style="margin: 10px 0px;">Para apresentar a sua
                                            reclamação, preencha o formulário abaixo</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-secondary">
                                    <div class="panel-body">
                                        <ul class="nav nav-pills"></ul>
                                        <form class="tab-content formulario" id="store"
                                            action="{{ route('site.reclamation.store') }}" method="post">
                                            <div class="col-md-10" style="margin: 0 auto !important;">
                                                @csrf
                                                <p>
                                                    <label for="campo_208">Nome<font color=red>&nbsp;*</font></label>
                                                    <input type="text" name="name" class="form-control">
                                                </p>
                                                <p>
                                                    <label for="campo_213">Email<font color=red>&nbsp;*</font></label>
                                                    <input type="email" name="email" class="form-control">
                                                </p>
                                                <p>
                                                    <label for="campo_209">Telemóvel<font color=red>&nbsp;*</font>
                                                    </label>
                                                    <input type="number" name="tel" class="form-control" size=20
                                                        maxlength=20 style="letter-spacing: 1.7px; display:block;">
                                                </p>
                                                <p>
                                                    <label for="campo_210">Nº de Protocolo<font color=red>&nbsp;*</font>
                                                    </label><input type="number" name="numberProtocol"
                                                        class="form-control">
                                                </p>
                                                <p>
                                                    <label for="campo_211">Reclamação<font color=red>&nbsp;*</font>
                                                    </label>
                                                    <textarea type="textarea" name="msg" class="form-control"></textarea>
                                                </p>

                                                <button
                                                    style="border-color: #800000 !important; background-color: #800000 !important;"
                                                    class="btn btn-primary" id="btn-submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

@section('JS')
    @if (session('save'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Reclamação enviada com sucesso!',
                showConfirmButton: true
            })
        </script>
    @endif
@endsection
