@extends('layouts.merge.dashboard')
@section('titulo', 'Ver Dnpcc')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            {{ $dnpcc->initials }}
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($dnpcc)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/dnpcc/edit/{$dnpcc->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar o Texto
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>
    @isset($dnpcc)


        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Sigla:</b><br>
                                {{ $dnpcc->initials }}
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Titulo:</b><br>
                                {{ $dnpcc->title }}
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <p class="mb-1 text-dark">
                                <b>Descrição:</b><br>
                                <p class="text-dark text-justify">{!! html_entity_decode($dnpcc->description) !!}</p>
                            </p>
                        </div>


                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $dnpcc->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $dnpcc->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection
