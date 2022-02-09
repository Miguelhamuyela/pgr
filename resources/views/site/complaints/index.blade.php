@extends('layouts.merge.site')
@section('titulo', ' Denúncias')
@section('content')

    <main id="main">


        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding" style="margin: 0 auto !important;">
            <div class="container">
                <div class="row">
                    <div id="rowTo" class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto 50px auto !important;">
                        <div class="section-headline text-center">
                            <h2>Denúncias</h2>
                            <!-- search option start -->
                            <div class="search-option" style="width: 85%;margin: 0 auto !important;">
                                <input style="background: #f9f9f9;" type="text" id="processo"
                                    placeholder="Consultar Denúncia..." value="">
                                <input id="searchKey" hidden type="text" value="">
                                <button class="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <!-- search option end -->
                        </div>
                    </div>

                </div>
                <div id="resultDenuncia">

                </div>

                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                        <div class="col-md-10" style="margin: 0 auto 50px auto; padding: 0;">
                            <div class="single-well">
                                <h4 class="sec-head">Apresentação de uma nova denúncia</h4>
                                <p>
                                    O autor da comunicação pode manter o anonimato. No entanto privilegia-se que se
                                    identifique, sendo nossa preocupação que não venha a ser desnecessariamente exposto
                                    publicamente durante a investigação.
                                </p>
                            </div>
                            <h4 class="sec-head">Para apresentar, preencha o formulário abaixo</h4>
                        </div>


                        <form action="{{ route('site.complaint.store') }}" method="POST" enctype="multipart/form-data"
                            class="row">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row d-flex justify-content-center">
                                <div class='col-md-10'>
                                    <fieldset style="margin-bottom: 50px;">
                                        <legend>Dados do Denunciante</legend>
                                        <p>
                                            <label for='campo_202'>Nome</label><input type='text' name='name' id='campo_202'
                                                class='form-control' value='' placeholder=''>
                                        </p>
                                        <p>
                                            <label for='campo_203'>Email</label><input type='email' name='email'
                                                id='campo_203' class='form-control' value='' placeholder=''>
                                        </p>
                                        <p>
                                            <label for='campo_204'>Telefone</label><input type='number' name='phone'
                                                id='campo_204' class='form-control' value='' placeholder=''>
                                        </p>

                                    </fieldset>
                                    <fieldset>
                                        <legend>Dados da Denúncia</legend>
                                        <p>
                                            <label for='campo_194'>Em que sector de actividade ocorreu a corrupção ou
                                                fraude?
                                                <font color=red>&nbsp;*</font>
                                            </label>
                                            <label for=''></label>
                                            <select type='combo' name='complaintData' id='campo_194' class='form-control'>
                                                <option SELECTED>Seleccione</option>


                                                <option value='Actividade Desportiva'>Actividade Desportiva</option>




                                                <option value='Administração Local'>Administração Local</option>
                                                <option value='Administração Provincial'>Administração Provincial</option>
                                                <option value='Advogados - Solicitadores - Agentes de execução'>Advogados -
                                                    Solicitadores - Agentes de execução</option>
                                                <option value='Assembleia da República - Deputados e Funcionários'>
                                                    Assembleia da República - Deputados e Funcionários</option>
                                                <option value='Corrupção internacional de empresas angolanas'>Corrupção
                                                    internacional de empresas angolanas</option>
                                                <option value='Direcções - Regionais - Serviços Periféricos'>Direcções -
                                                    Regionais - Serviços Periféricos</option>
                                                <option value='Empresas privadas'>Empresas privadas</option>
                                                <option value='Entidades de supervisão'>Entidades de supervisão</option>
                                                <option value='Entidades do sector bancário'>Entidades do sector bancário
                                                </option>
                                                <option value='Entidades públicas empresariais (Ex: Hospitais Públicos'>
                                                    Entidades públicas empresariais (Ex: Hospitais Públicos</option>
                                                <option value='Forças de seguranças e militares'>Forças de seguranças e
                                                    militares</option>
                                                <option value='Fundações e Associações'>Fundações e Associações</option>
                                                <option value='Governo - Direcções - gerais - Serviços centrais'>Governo -
                                                    Direcções - gerais - Serviços centrais</option>
                                                <option value='Institutos e outro serviçoes personalizados'>Institutos e
                                                    outro serviçoes personalizados</option>
                                                <option value='Ordens profissionais e associações públicas'>Ordens
                                                    profissionais e associações públicas</option>
                                                <option value='Outros - Entidades não especificadas'>Outros - Entidades não
                                                    especificadas</option>

                                            </select>
                                        </p>
                                        <p>
                                            <label for='campo_195'>Actos de corrupção ou fraude<font color=red>&nbsp;*
                                                </font></label><textarea type='textarea' name='actsCorruption'
                                                id='campo_195' class='form-control' placeholder=''></textarea><i>Narre os
                                                factos de que tem conhecimento com o maior detalhe possível, incluindo
                                                locais, pessoas e empresas envolvidas, modo de actuar, se foram feitos
                                                pagamentos e como, através de que meios, contas bancárias e titulares,
                                                procurando ser objectivo</i>
                                        </p>
                                        <p>
                                            <label for='campo_196'>Datas ou períodos em que ocorreram os factos<font
                                                    color=red>&nbsp;*</font></label><input type='text' name='datesPeriods'
                                                id='campo_196' class='form-control' value='' placeholder=''><i>Exemplo: em
                                                30 Julho de 2009, em finais de Julho de 2009, entre 15 e 30 de Julho de
                                                2009, em Agosto de 2009, em meados de 2009, em 2009, entre Janeiro e Março
                                                de 2009, a situação vem-se repetindo desde há cerca de 2 anos, etc... </i>
                                        </p>
                                        <p>
                                            <label for='campo_197'>Identificação dos suspeitos<font color=red>&nbsp;*</font>
                                                </label><textarea type='textarea' name='identificationSuspects'
                                                id='campo_197' class='form-control' placeholder=''></textarea><i>Indique
                                                todos os dados que sabe sobre as pessoas e empresas envolvidas na corrupção
                                                ou fraude, local de trabalho, profissão, residência, pessoas das suas
                                                relações, contactos, veículos automóveis, outras propriedades, etc.</i>
                                        </p>
                                        <p>
                                            <label for='campo_198'>Como tomou conhecimento dos factos?<font color=red>
                                                    &nbsp;*</font></label><textarea type='textarea' name='knowledgeFacts'
                                                id='campo_198' class='form-control' placeholder=''></textarea><i>Diga se
                                                ouviu alguém e, nesse caso, a quem, falar dos factos, se os presenciou, se
                                                os leu em algum documento</i>
                                        </p>
                                        <p>
                                            <label for='campo_199'>Valor aproximado das quantias envolvidas</label><input
                                                type='number' name='amountsInvolved' id='campo_199' class='form-control'
                                                value='' placeholder=''><i>Se não houver entrega/recebimento de dinheiro,
                                                indique uma estimativa do valor dos bens em causa</i>
                                        </p>
                                        <p>
                                            <label for='campo_200'>Outras pessoas que têm conhecimento dos factos ou podem
                                                ajudar a esclarecê-los</label><textarea type='textarea' name='knowledge'
                                                id='campo_200' class='form-control' placeholder=''></textarea><i>Identifique
                                                outras pessoas que possam auxiliar a investigação, dando informações ou
                                                prestando testemunho</i>
                                        </p>
                                        <p>
                                            <label for='campo_201'>Documentos e outras provas que fundamentam a sua
                                                denúncia</label><textarea type='textarea' name='documentsEvidenc'
                                                id='campo_201' class='form-control' placeholder=''></textarea><i>Indique se
                                                possui ou onde se encontram documentos que pensa serem relevantes para a
                                                prova. Se os tiver digitalizado, envie-os através da função abaixo "Anexar
                                                ficheiro". Se preferir, pode enviá-los por correio para a morada da PGR.</i>
                                        </p>
                                        <p>
                                            <input type="file" name="attachment" id="file" value=""
                                                class="form-control border-secondary"><i>Pode submeter ficheiros de imagem
                                                ou PDF.</i>
                                        </p>

                                    </fieldset>
                                    <button
                                        style="margin-top: 30px;border-color: #800000 !important; background-color: #800000 !important;"
                                        class="btn btn-primary" id="btn-submit">Enviar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End About Section -->

    </main>

@endsection
