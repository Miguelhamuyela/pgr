@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do comunicado')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.otherDocuments.index') }}"><u>Listar Outros Documentos</u></a> >
                {{ $OtherDocuments->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h4 m-4 page-title">Titulo: {{ $OtherDocuments->title }}</h2>


                        <h4 class="h4 m-4">
                            Ficheiro:
                            <a href="/storage/{{ $OtherDocuments->file }}" target="_blank">
                                <i class="fe fe-file fe-16"></i>
                            </a>
                        </h4>

                        <div class="col-md-12 mb-2">
                            <hr>
                            <p class="mb-1 text-dark">
                                <b>Data de Cadastro:</b> {{ $OtherDocuments->created_at }}
                            </p>
                            <p class="mb-1 text-dark">
                                <b>Última Actualização:</b> {{ $OtherDocuments->updated_at }}
                            </p>

                        </div>

                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>
@endsection
