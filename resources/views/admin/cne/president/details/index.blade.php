@extends('layouts.merge.dashboard')
@section('titulo', 'Ver Presidente')

@section('content')
    <div class="card mb-2">
        <div class="card-body">

            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h5 page-title">
                            Presidente
                        </h2>
                    </div>
                    <div class="col-auto">
                        @isset($presidents)
                            <a type="button" class="btn btn-sm btn-primary text-white"
                                href="{{ url("admin/cne/president/edit/{$presidents->id}") }}">
                                <span class="fe fe-edit fe-16 mr-2"></span>Editar o Texto
                            </a>
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </div>
    @isset($presidents)


        <div class="card shadow">
            <div class="card-body">

                <div class="container-fluid">
                    <div class="row m-4">
                        @if ($presidents->file)
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-md-12 text-left mt-2">
                                        <h4>Foto do presidente</h4>
                                    </div>
                                    <div class="col-md-4"
                                        style='background-image:url("/storage/{{ $presidents->file }}");background-position:center;background-size:cover;height:400px;'>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-md-12 mb-2">

                            <b>Titulo:</b>
                            <p class="mb-1 text-dark">
                            <h4> {{ $presidents->title }}</h4>
                            </p>
                        </div>
                        <div class="col-md-12 mb-2">

                            <b>Corpo:</b><br>
                            <p class="mb-1 text-dark">
                                {!! html_entity_decode($presidents->information) !!}
                            </p>
                        </div>

                    </div> <!-- .row -->
                    <div class="row align-items-center">
                        <div class="col-md-7 mb-2">
                            <hr>
                            <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $presidents->created_at }}
                            </p>
                            <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $presidents->updated_at }}
                            </p>

                        </div>
                    </div>
                </div> <!-- .container-fluid -->
            </div>
        </div>
    @endisset


@endsection
