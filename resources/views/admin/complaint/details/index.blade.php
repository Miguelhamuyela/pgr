@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Denúcias')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.complaint.index') }}"><u>Listar Denúcias</u></a> >
                {{ $complaint->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">Dados do Denunciante</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Email:</b><br>
                                            {{ $complaint->email }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Telefone:</b><br>
                                            {{ $complaint->phone }}
                                        </h5>
                                    </div>
                                    <center>    <h3>Dados da Denúncia</h3></center>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Em que sector de actividade ocorreu a corrupção ou fraude:</b><br>
                                            {{ $complaint->complaintData }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Actos de corrupção ou fraude:</b><br>
                                            {{ $complaint->actsCorruption }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Datas ou períodos em que ocorreram os factos:</b><br>
                                            {{ $complaint->datesPeriods }}
                                        </h5>
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Identificação dos suspeitos:</b><br>
                                            {{ $complaint->identificationSuspects }}
                                        </h5>
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Como tomou conhecimento dos factos:</b><br>
                                            {{ $complaint->knowledgeFacts }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Valor aproximado das quantias envolvida:</b><br>
                                            {{ $complaint->amountsInvolved }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Outras pessoas que têm conhecimento dos factos ou podem ajudar a esclarecê-los:</b><br>
                                            {{ $complaint->knowledge }}
                                        </h5>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Documentos e outras provas que fundamentam a sua denúncia</b><br>
                                            {{ $complaint->documentsEvidenc }}
                                        </h5>
                                    </div>


                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <h4 class="h4 m-4">
                                                Ficheiro:
                                                <a href="/storage/{{ $complaint->attachment }}" target="_blank">
                                                    <i class="fe fe-file fe-16"></i>
                                                </a>
                                            </h4>


                                        </h5>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Mensagem:</b>
                                        </h5>
                                        <p class="text-dark text-justify">{!! html_entity_decode($complaint->msg) !!}</p>

                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $complaint->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b>
                                            {{ $complaint->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection
