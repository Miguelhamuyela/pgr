<!doctype html>
<html class="no-js" lang="en">

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
   
    <style>
        .list-item-heading:hover {
            color: red;
        }
    </style>
</head>

<body>

    <!-- MODAL -->
    <?php if (is_array($contactos)) foreach ($contactos as $contacto) : ?>
        <div class="modal fade edit-layout-modal" id="modalView<?= $contacto->id ?>" id="editLayoutItem" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editLayoutItemLabel">Enviada por: <b><?= $contacto->nome ?></b> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

 

                        <p>Email: <b><?= $contacto->email ?></b></p>

                        <p style="text-transform: uppercase;">Assunto: <?= $contacto->assunto ?></p>


                        <p style="text-transform: uppercase;">Mensagem:</p>
                        <div class="jumbotron pt-30 pb-30 mt-30">
                            <p class="lead"> <?= $contacto->assunto ?></p>
                        </div>



                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button data-toggle="modal" data-target="#resposta<?= $contacto->id ?>" type="button" class="btn btn-primary">Responder</button>

                        <button onclick="handleDestroy(<?= $contacto->id ?>)" type="button" class="btn btn-danger list-delete">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- END MODAL -->

    <!-- MODAL RESPOSTA -->
    <?php if (is_array($contactos)) foreach ($contactos as $contacto) : ?>

        <div class="modal fade edit-layout-modal" id="resposta<?= $contacto->id ?>" tabindex="-1" role="dialog" aria-labelledby="editLayoutItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <form id="store" method="post" action="<?= $router->route('contactos.resposta') ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Responder</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" name="nome" id="nome" readonly class="form-control" value="<?= $contacto->nome ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="email" id="email" readonly class="form-control" value="<?= $contacto->email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Assunto</label>
                                    <input type="text" name="assunto" id="assunto" readonly class="form-control" value="<?= $contacto->assunto ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mensagem</label>
                                    <textarea rows="5" name="mensagem" class="form-control textarea"></textarea>
                                    
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <?php endforeach; ?>
    <!-- END MODAL RESPOSTA -->

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
                                            <h2>Contactos</h2>
                                            <h6>Faça aqui o gerenciamento das pessoas que entraram em contacto</h6>

                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2 clearfix">

                                <div class="collapse d-md-block display-options" id="displayOptions">
                                    <div class="d-block d-md-inline-block">
                                        <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                            <form action="#">
                                                <input type="text" class="form-control" placeholder="Pesquisar.." required>
                                                <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                                <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Full Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <button class="btn btn-theme">Pesquisar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator mb-20"></div>

                            <div class="row layout-wrap" id="layout-wrap">
                                <?php if (is_array($contactos)) foreach ($contactos as $key => $contacto) : ?>
                                    <div class="col-12 list-item">
                                        <div class="card d-flex flex-row mb-3">
                                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#editLayoutItem" data-toggle="modal" data-target="#modalView<?= $contacto->id ?>">
                                                        <?= $contacto->assunto ?>
                                                    </a>
                                                    <p class="mb-1 text-muted text-small category w-15 w-xs-100"><?= $contacto->nome ?></p>
                                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100"><?= $contacto->created_at ?></p>
                                                </div>
                                                <div class="list-actions">
                                                    <a href="#editLayoutItem" data-toggle="modal" data-target="#modalView<?= $contacto->id ?>"><i class="ik ik-eye"></i></a>
                                                    <a target-id ="<?= $contacto->id ?>"><i class="contactos-eliminar ik ik-delete" target-id ="<?= $contacto->id ?>"></i></a>
                                            
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

        </div>
    </div>


    <script src="<?= assetGestor('../../code.jquery.com/jquery-3.3.1.min.js') ?>"></script>
     <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>
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
      <script src="<?= asset('assets/js/main.js') ?>"></script>
 
     <script src="<?= assetGestor('js/HttpRequest.js') ?>"></script>
    <script src="<?= assetGestor('js/alert.js') ?>"></script>
 
     
     

       
    
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