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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="wrapper">
        <?php include('includes/header.php') ?>

        <div class="page-wrap">
            <?php include('includes/side-bar.php') ?>
            <div class="main-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Denúncias</h6>
                                            <h2><?= $count ?></h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-question fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?= $count ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= ($count / 100) * 100 ?>%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php if (is_array($denuncias)) foreach ($denuncias as $denuncia) : ?>

                            <form class="update" action="<?= $router->route('estado.update', ["id" => $denuncia->id]) ?>">
                                <!-- MODAL -->
                                <div class="modal fade edit-layout-modal" id="modalView<?= $denuncia->id ?>" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-question fa-lg"></i> Denúncia</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>


                                            <div class="modal-body">

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <br>
                                                        <h3 class="card-title">Dados do Denunciante</h3>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nome</label>
                                                            <?= $denuncia->estado ?>
                                                            <input type="text" readonly value="<?= $denuncia->Nome_denunciante ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" readonly value="<?= $denuncia->email ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Telefone</label>
                                                            <input type="text" readonly value="<?= $denuncia->Telefone ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <br>
                                                        <h3 class="card-title">Dados da Denúncia</h3>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Actos de Corrupção ou fraude</label>
                                                            <textarea class="form-control" rows="5" readonly><?= $denuncia->Actos_corrupcao ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Datas ou períodos em que ocorreram os factos</label>
                                                            <input type="text" readonly value="<?= $denuncia->periodos_factos ?>" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Valor aproximado das quantias envolvidas</label>
                                                            <input type="text" readonly value="<?= $denuncia->valor_envolvido ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Suspeitos</label>
                                                            <textarea class="form-control" rows="5" readonly><?= $denuncia->suspeitos ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Como tomou conhecimento dos factos?</label>
                                                            <textarea class="form-control" rows="5" readonly><?= $denuncia->conhecimento_factos ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Outras pessoas que têm conhecimento dos factos ou podem ajudar a esclarecê-los</label>
                                                            <textarea class="form-control" rows="5" readonly><?= $denuncia->ajudantes ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Documentos e outras provas que fundamentam a sua denúncia</label>
                                                            <textarea class="form-control" rows="5" readonly><?= $denuncia->provas ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                   <div class="col-md-8">
                                                <select class="form-control" name="estado">
                                                    <option value="Submetido">Submetido</option>
                                                    <option value="Em tratamento">Em tratamento</option>
                                                    <option value="Respondida">Respondida</option>

                                                </select>
                                            </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <br>

                                                        <img style="width: 20%;" src="<?= asset('assets/img/anexar-arquivo.png') ?>" <hr>
                                                    </div>
                                                    <div class="col-md-12" style="display: flex;justify-content:center;">
                                                        <div class="resume  table-responsive table-responsive-table">
                                                            <div class="docs" style="display: flex;">
                                                                <?php if (is_array($docs)) foreach ($docs as $key => $doc) :
                                                                    if ($doc->denuncia == $denuncia->id) :
                                                                ?>
                                                                        <div class="doc" style="padding: 10px !important;">
                                                                            <a href="<?= URL_BASE_FILES . $doc->src ?>" target="_blank">
                                                                                <img style="min-width: 86px !important; height: 90px !important;" src="img/icons/word.png" alt="">
                                                                                <p style="font-size: .5em;"><?= $doc->src ?></p>
                                                                            </a>
                                                                        </div>
                                                                <?php endif;
                                                                endforeach; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                         

                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-secondary">Aprovar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </form>
                            <!-- END MODAL -->
                            <div class="col-md-4">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3><?= $denuncia->estados ?></h3>
                                        <div class="card-header-left">
                                            <h5><?= $denuncia->estado ?></h5>
                                        </div>
                                    </div>
                                    <div >
                                        <div>
                                            <ol>

                                                <li>
                                                    <div>

                                                        <h5><?= $denuncia->email ?></h5>
                                                        <h6><?= $denuncia->Nome_denunciante ?></h6>
                                                        <p><?= $denuncia->Telefone ?></p>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div style="margin-right: 6px;display: flex; justify-content: center;">
                                            <button data-toggle="modal" data-target="#modalView<?= $denuncia->id ?>" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i>Visualizar</button>
                                                <button class="denuncias-eliminar btn btn-danger" target-id ="<?= $denuncia->id ?>" style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                            
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <?php include('includes/footer.php') ?>


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
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>
</body>

<!-- Mirrored from themekit.lavalite.org/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 09:29:57 GMT -->

</html>