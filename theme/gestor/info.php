        <!doctype html>
        <html class="no-js" lang="en">

        <!-- Mirrored from themekit.lavalite.org/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 09:26:38 GMT -->

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>PGR - Gestor</title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="icon" href="<?= assetGestor('favi.png') ?>" type="image/x-icon" />

            <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <link rel="stylesheet" href="<?= assetGestor('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/%40fortawesome/fontawesome-free/css/all.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/icon-kit/dist/css/iconkit.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/ionicons/dist/css/ionicons.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/perfect-scrollbar/css/perfect-scrollbar.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/jvectormap/jquery-jvectormap.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/weather-icons/css/weather-icons.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/c3/c3.min.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/owl.carousel/dist/assets/owl.carousel.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('node_modules/owl.carousel/dist/assets/owl.theme.default.css') ?>">
            <link rel="stylesheet" href="<?= assetGestor('dist/css/theme.min.css') ?>">
            <script src="<?= assetGestor('src/js/vendor/modernizr-2.8.3.min.js') ?>"></script>

            <script>
                function exibir_ocultar(val) {

                    if (val.value == 'Sobre') {
                        document.getElementById('resumo').style.display = 'none';
                        document.getElementById('titulo').style.display = 'block';
                        document.getElementById('imagem').style.display = 'block';
                        document.getElementById('anexos').style.display = 'block';
                        document.getElementById('descricao').style.display = 'block';
                    }

                    if (val.value == 'SMSdoPGR') {
                        document.getElementById('resumo').style.display = 'none';
                        document.getElementById('titulo').style.display = 'none';
                        document.getElementById('imagem').style.display = 'block';
                        document.getElementById('anexos').style.display = 'none';
                        document.getElementById('descricao').style.display = 'block';
                    }

                    if (val.value == 'Legislacoes') {
                        document.getElementById('resumo').style.display = 'block';
                        document.getElementById('titulo').style.display = 'block';
                        document.getElementById('imagem').style.display = 'none';
                        document.getElementById('anexos').style.display = 'block';
                        document.getElementById('descricao').style.display = 'none';
                    }

                    if (val.value == 'SEDE') {
                        document.getElementById('resumo').style.display = 'none';
                        document.getElementById('titulo').style.display = 'block';
                        document.getElementById('imagem').style.display = 'block';
                        document.getElementById('anexos').style.display = 'none';
                        document.getElementById('descricao').style.display = 'none';
                    }

                    
                }
            </script>
        </head>

        <body>

            <!-- MODAL EDIT SOBRE -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i> Alterando Informações do Sobre</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[0]->id ?>">
                                <input name="id" value="<?= $informacoes[0]->id ?>" type="number" hidden>

                                <div class="row">
                                    <div id="titulo" class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Título</label>
                                        <input name="titulo" value="<?= $informacoes[0]->titulo ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div id="imagem" class="row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Carregar Imagem</label>
                                        <input name="imagem" type="file" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Carregar Anexos</label>
                                        <input name="anexo" type="file" class="form-control">
                                    </div>
                                </div>
                                <div id="descricao" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="message-text" class="col-form-label">Descrição:</label>
                                        <textarea name="descricao" value="<?= $informacoes[0]->descricao ?>" rows="5" class="form-control"><?= $informacoes[0]->descricao ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Alterar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EDIT SOBRE -->

            <!-- MODAL EDIT EDIFICIO -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando Informações sobre o Edifício SEDE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[1]->id ?>">
                                <input name="id" value="<?= $informacoes[1]->id ?>" type="number" hidden>

                                <div class="row">
                                    <div id="titulo" class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Título</label>
                                        <input name="titulo" value="<?= $informacoes[1]->titulo ?>" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Carregar Imagem</label>
                                        <input name="imagem" type="file" class="form-control">
                                    </div>
                                </div>
                                <div id="descricao" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="message-text" class="col-form-label">Descrição:</label>
                                        <textarea name="descricao" value="<?= $informacoes[1]->descricao ?>" rows="5" class="form-control"><?= $informacoes[1]->descricao ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Alterar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END EDIT EDIFICIO -->

            <!-- MODAL EDIT SMS_PGR -->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando a Mensagem do PGR</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[2]->id ?>">
                                <input name="id" value="<?= $informacoes[2]->id ?>" type="number" hidden>

                                <div id="imagem" class="row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Carregar Imagem</label>
                                        <input name="imagem" type="file" class="form-control">
                                    </div>
                                    <div id="resumo" class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nome Completo</label>
                                        <input name="titulo" value="<?= $informacoes[2]->titulo ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div id="descricao" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="message-text" class="col-form-label">Mensagem:</label>
                                        <textarea name="descricao" value="<?= $informacoes[2]->descricao ?>" rows="5" class="form-control"><?= $informacoes[2]->descricao ?></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Alterar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            
            <!-- END EDIT SMS_PGR -->

            <!-- MODAL EDIT LEGISLACOES -->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando as Legislações</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[3]->id ?>" id="legislacoes">
                                <input name="id" value="<?= $informacoes[3]->id ?>" type="number" hidden>

                                <div id="anexos" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Carregar Anexos</label>
                                        <input name="anexos[]" type="file" class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="resumo" class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Descrição</label>
                                        <textarea name="descricao"  value="<?= $informacoes[3]->descricao ?>" rows="4" class="form-control"><?= $informacoes[3]->descricao ?></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="row" style="display: flex; justify-content: center;">
                                <table id="example" class="table table-striped table-bordered" style="width:95%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th style="text-align: center !important;">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($anexos)) foreach ($anexos as $key => $anexo) :
                                            if ($anexo->id_info == 4) :
                                        ?>
                                                <tr>
                                                    <td style="width: 100px;"><?= $key ?></td>
                                                    <td style="width: 700px;"><a href="<?= URL_BASE_FILES . $anexo->src ?>" target="_blank"><?= $anexo->titulo ?></a></td>
                                                    <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                        
                                        <button class="legislacao-eliminar" target-id ="<?= $anexo->id ?>" style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                            
                                                     
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                                <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                        <?php endif;
                                        endforeach; ?>
                                        <!-- <tr>
                                                <td style="width: 100px;">2</td>
                                                <td style="width: 700px;">Exemplo1</td>
                                                <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                    <button style="border: none; background: none;" onclick="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                            <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" form="legislacoes">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando as comunicados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[4]->id ?>" id="comunicado">
                                <input name="id" value="<?= $informacoes[4]->id ?>" type="number" hidden>

                                <div id="anexos" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Carregar Anexos</label>
                                        <input name="anexos[]" type="file" class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="resumo" class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Descrição</label>
                                        <textarea name="descricao" readonly value="<?= $informacoes[4]->descricao ?>" rows="4" class="form-control"><?= $informacoes[4]->descricao ?></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="row" style="display: flex; justify-content: center;">
                                <table id="example" class="table table-striped table-bordered" style="width:95%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th style="text-align: center !important;">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($anexos)) foreach ($anexos as $key => $anexo) :
                                            if ($anexo->id_info == 5) :
                                        ?>
                                                <tr>
                                                    <td style="width: 100px;"><?= $key ?></td>
                                                    <td style="width: 700px;"><a href="<?= URL_BASE_FILES . $anexo->src ?>" target="_blank"><?= $anexo->titulo ?></a></td>
                                                    <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                        <button style="border: none; background: none;" onclick="handleDestroy('anexos', <?= $anexo->id ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                                <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                        <?php endif;
                                        endforeach; ?>
                                        <!-- <tr>
                                                <td style="width: 100px;">2</td>
                                                <td style="width: 700px;">Exemplo1</td>
                                                <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                    <button style="border: none; background: none;" onclick="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                            <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" form="comunicado">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando as comunicados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[5]->id ?>" id="publicacao">
                                <input name="id" value="<?= $informacoes[5]->id ?>" type="number" hidden>

                                <div id="anexos" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Carregar Anexos</label>
                                        <input name="anexos[]" type="file" class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="resumo" class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Descrição</label>
                                        <textarea name="descricao" readonly value="<?= $informacoes[5]->descricao ?>" rows="4" class="form-control"><?= $informacoes[5]->descricao ?></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="row" style="display: flex; justify-content: center;">
                                <table id="example" class="table table-striped table-bordered" style="width:95%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th style="text-align: center !important;">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($anexos)) foreach ($anexos as $key => $anexo) :
                                            if ($anexo->id_info == 6) :
                                        ?>
                                                <tr>
                                                    <td style="width: 100px;"><?= $key ?></td>
                                                    <td style="width: 700px;"><a href="<?= URL_BASE_FILES . $anexo->src ?>" target="_blank"><?= $anexo->titulo ?></a></td>
                                                    <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                        <button style="border: none; background: none;" onclick="handleDestroy('anexos', <?= $anexo->id ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                                <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                        <?php endif;
                                        endforeach; ?>
                                        <!-- <tr>
                                                <td style="width: 100px;">2</td>
                                                <td style="width: 700px;">Exemplo1</td>
                                                <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                    <button style="border: none; background: none;" onclick="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                            <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" form="publicacao">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando as Relatorios Anuais</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[6]->id ?>" id="R_anuais">
                                <input name="id" value="<?= $informacoes[6]->id ?>" type="number" hidden>

                                <div id="anexos" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Carregar Anexos</label>
                                        <input name="anexos[]" type="file" class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="resumo" class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Descrição</label>
                                        <textarea name="descricao" readonly value="<?= $informacoes[6]->descricao ?>" rows="4" class="form-control"><?= $informacoes[6]->descricao ?></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="row" style="display: flex; justify-content: center;">
                                <table id="example" class="table table-striped table-bordered" style="width:95%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th style="text-align: center !important;">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($anexos)) foreach ($anexos as $key => $anexo) :
                                            if ($anexo->id_info == 7) :
                                        ?>
                                                <tr>
                                                    <td style="width: 100px;"><?= $key ?></td>
                                                    <td style="width: 700px;"><a href="<?= URL_BASE_FILES . $anexo->src ?>" target="_blank"><?= $anexo->titulo ?></a></td>
                                                    <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                        <button style="border: none; background: none;" onclick="handleDestroy('anexos', <?= $anexo->id ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                                <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                        <?php endif;
                                        endforeach; ?>
                                        <!-- <tr>
                                                <td style="width: 100px;">2</td>
                                                <td style="width: 700px;">Exemplo1</td>
                                                <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                    <button style="border: none; background: none;" onclick="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                            <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" form="R_anuais">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-info fa-lg"></i>Alterando Outros Documentos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="update" action="https://pgr.ao/gestor/informacoes/<?= $informacoes[7]->id ?>" id="O_documentos">
                                <input name="id" value="<?= $informacoes[7]->id ?>" type="number" hidden>

                                <div id="anexos" class="row">
                                    <div class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Carregar Anexos</label>
                                        <input name="anexos[]" type="file" class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="resumo" class="form-group col-md-12">
                                        <label for="recipient-name" class="col-form-label">Descrição</label>
                                        <textarea name="descricao" readonly value="<?= $informacoes[7]->descricao ?>" rows="4" class="form-control"><?= $informacoes[7]->descricao ?></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="row" style="display: flex; justify-content: center;">
                                <table id="example" class="table table-striped table-bordered" style="width:95%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th style="text-align: center !important;">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($anexos)) foreach ($anexos as $key => $anexo) :
                                            if ($anexo->id_info == 8) :
                                        ?>
                                                <tr>
                                                    <td style="width: 100px;"><?= $key ?></td>
                                                    <td style="width: 700px;"><a href="<?= URL_BASE_FILES . $anexo->src ?>" target="_blank"><?= $anexo->titulo ?></a></td>
                                                    <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                        <button style="border: none; background: none;" onclick="handleDestroy('anexos', <?= $anexo->id ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                                <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                            </svg>   
                                                        </button>
                                                    </td>
                                                </tr>
                                        <?php endif;
                                        endforeach; ?>
                                        <!-- <tr>
                                                <td style="width: 100px;">2</td>
                                                <td style="width: 700px;">Exemplo1</td>
                                                <td style="text-align: center !important;display: flex; flex-direction: row; justify-content: center;">
                                                    <button style="border: none; background: none;" onclick="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" style="margin: 0px 7px !important;">
                                                            <path fill-rule="evenodd" d="M6.5 1.75a.25.25 0 01.25-.25h2.5a.25.25 0 01.25.25V3h-3V1.75zm4.5 0V3h2.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75zM4.496 6.675a.75.75 0 10-1.492.15l.66 6.6A1.75 1.75 0 005.405 15h5.19c.9 0 1.652-.681 1.741-1.576l.66-6.6a.75.75 0 00-1.492-.149l-.66 6.6a.25.25 0 01-.249.225h-5.19a.25.25 0 01-.249-.225l-.66-6.6z"></path>
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" form="O_documentos">Alterar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- END EDIT LEGISLACOES -->

            <div class="wrapper">
                <?php include('includes/header.php') ?>

                <div class="page-wrap">
                    <?php include('includes/side-bar.php') ?>
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget">
                                        <div class="widget-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="state">
                                                    <h2>Informações</h2>
                                                    <h6>Faça aqui o gerenciamento das informações do seu portal</h6>

                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-info fa-lg"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <table id="advanced" class="table" style="margin-left: 1px !important;width: 100% !important;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="nosort">Título</th>
                                                <th>Descrição</th>
                                                <th>Tipo</th>
                                                <th style="text-align: center;">Acções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (is_array($informacoes)) foreach ($informacoes as $key => $informacao) : ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td>
                                                        <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; height: 60px; margin-bottom: 6px;">
                                                            <?= $informacao->titulo ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis; height: 70px; margin-bottom: 6px;">
                                                            <?= $informacao->descricao ?>
                                                        </div>
                                                    </td>
                                                    <td><?= $informacao->tipo ?></td>
                                                    <td>
                                                        <div style="display: flex; justify-content: center;">
                                                            <button data-toggle="modal" data-target="#modal<?= $key + 1 ?>" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include('includes/footer.php') ?>

                </div>
            </div>


    <script src="<?= assetGestor('assets/js/main.js') ?>"></script>
     
    <script src="<?= assetGestor('js/HttpRequest.js') ?>"></script>
    <script src="<?= assetGestor('js/alert.js') ?>"></script>

            <script src="<?= assetGestor('../../code.jquery.com/jquery-3.3.1.min.js') ?>"></script>
            <script>
                window.jQuery || document.write('<script src="<?= assetGestor('src/js/vendor/jquery-3.3.1.min.js') ?>"><\/script>')
            </script>
            <script src="<?= assetGestor('node_modules/popper.js/dist/umd/popper.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/screenfull/dist/screenfull.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/jvectormap/jquery-jvectormap.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/moment/moment.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/d3/dist/d3.min.js') ?>"></script>
            <script src="<?= assetGestor('node_modules/c3/c3.min.js') ?>"></script>
            <script src="<?= assetGestor('js/tables.js') ?>"></script>
            <script src="<?= assetGestor('js/widgets.js') ?>"></script>
            <script src="<?= assetGestor('js/charts.js') ?>"></script>
            <script src="<?= assetGestor('dist/js/theme.min.js') ?>"></script>
           <script src="<?= assetGestor('ckeditor/ckeditor.js') ?>"></script>

            <script>
                CKEDITOR.replace('editor1');
            </script>

            
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b, o, i, l, e, r) {
                    b.GoogleAnalyticsObject = l;
                    b[l] || (b[l] =
                        function() {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                    b[l].l = +new Date;
                    e = o.createElement(i);
                    r = o.getElementsByTagName(i)[0];
                    e.src = '../../www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga'));
                ga('create', 'UA-XXXXX-X', 'auto');
                ga('send', 'pageview');
            </script>
            <script>
                $('#advanced').DataTable({
                    "language": {
                        "sProcessing": "Carregando...",
                        "sLengthMenu": "Exibir _MENU_ registros por página",
                        "sZeroRecords": "Nenhum resultado encontrado",
                        "sEmptyTable": "Nenhum resultado encontrado",
                        "sInfo": "Exibindo do _START_ até _END_ de um total de _TOTAL_ registros",
                        "sInfoEmpty": "Exibindo do 0 até 0 de um total de 0 registros",
                        "sInfoFiltered": "(Filtrado de um total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Pesquisar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Carregando...",
                        "oPaginate": {
                            "sFirst": "Primeiro",
                            "sLast": "Último",
                            "sNext": "Próximo",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Ativar para ordenar a columna de maneira crescente",
                            "sSortDescending": ": Ativar para ordenar a columna de maneira decrescente"
                        }
                    }
                });
            </script>
            <script src="<?= assetGestor('tinymce/tinymce.min.js') ?>"></script>
            <script>
                tinymce.init({
                    selector: ".textarea",
                    height: 300
                })
            </script>
 


        </body>

        <!-- Mirrored from themekit.lavalite.org/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 09:29:57 GMT -->

        </html>