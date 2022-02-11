@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Legislação')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.direction.index') }}"><u>Listar Direção Geral</u></a> >
                {{ $direction->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h4 m-4 page-title">Nome: {{ $direction->name }}</h2>
                        <h2 class="h4 m-4">Cargo: {{ $direction->office }}</h2>
                        <h2 class="h4 m-4">Província: {{ $direction->province }}</h2>
                        <h2 class="h4 m-4">Orgão: {{ $direction->organ }}</h2>



                        <div class="col-md-12 mb-2">
                            <hr>
                            <p class="mb-1 text-dark">
                                <b>Data de Cadastro:</b> {{ $direction->created_at }}
                            </p>
                            <p class="mb-1 text-dark">
                                <b>Última Actualização:</b> {{ $direction->updated_at }}
                            </p>

                        </div>

                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>
    <div class="card shadow mt-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Foto de Capa</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">
                                <div class="card-img-top img-fluid rounded"
                                    style='background-image:url("/storage/{{  $direction->photo }}");background-position:center;background-size:cover;height:400px;'>
                                </div>

                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>

@endsection
