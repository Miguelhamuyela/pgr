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
</head>

<body>


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
                                            <h6>Reclamações</h6>
                                            <h2><?= $count ?></h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?= $count ?>" aria-valuemin="0" aria-valuemax="200" style="width: <?= ($count / 100) * 200 ?>%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header row">
                                <div class="col col-sm-3"></div>
                                <div class="col col-sm-6">
                                    <div class="card-search with-adv-search dropdown">
                                        <form action="#">
                                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Pesquisar.." required>
                                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="advanced" class="table" style="margin-left: 1px !important;width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nº de Protocolo</th>
                                            <th class="nosort">Nome</th>
                                            <th>Email</th>
                                            <th>Telemóvel</th>
                                            <th>Estado</th>
                                            <th style="text-align: center;">Acções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($reclamacoes != NULL) { ?>
                                            <?php foreach ($reclamacoes as  $reclamacoe) : ?>
                                                <!-- MODAL View -->
                                                <div class="modal fade" id="modalView<?= $reclamacoe->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel"><i class="fa fa-thumbs-down" aria-hidden="true"></i></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h5><?= $reclamacoe->nome ?></h5>
                                                                        Email: <?= $reclamacoe->email ?> <br>
                                                                        Nº de Protocolo: <?= $reclamacoe->n_protocolo ?> <br>
                                                                        Telemóvel: <?= $reclamacoe->telefone ?><br>
                                                                        Estado: <?= $reclamacoe->estado ?>
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6 style="text-transform: uppercase;">Reclamação:</h6>
                                                                        <p>
                                                                            <?= $reclamacoe->reclamacao ?>
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                <button data-toggle="modal" data-target="#modalResposta<?= $reclamacoe->id ?>" type="button" class="btn btn-primary">Responder</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL View -->

                                                <!-- MODAL Resposta -->
                                                
                                                <div class="modal fade" id="modalResposta<?= $reclamacoe->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel">Responder</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="form-<?= $reclamacoe->id; ?>" action="<?= $router->route('reclamacoes.responder') ?>" class="form-problem">
                                                                    <div class="card-body card-problem">
                                                                    <input type="hidden" name="reclamacao" class="form-control" value="<?= $reclamacoe->id ?>"> </div>

                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Nome</label>
                                                                              <input type="text" name="nome" readonly  class="form-control" value="<?= $reclamacoe->nome ?>"> 
                                                                        </div>
                                                                        
                                                                         <div class="form-group">
                                                                            <label for="exampleInputEmail1">Numero Protocolo</label>
                                                                              <input type="text" name="n_protocolo" readonly  class="form-control" value="<?= $reclamacoe->n_protocolo ?>"> 
                                                                        </div>
                                                              
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Email</label>
                                                                            <input type="text" name="email" readonly  class="form-control" value="<?= $reclamacoe->email ?>">
                                                                        </div>
                                                                        
                                                                                   <div class="form-group">
                                                                                      <label for="exampleInputPassword1">Mensagem</label>
                                                                                <textarea rows="5" name="mensagem" class="form-control" form="form-<?= $reclamacoe->id; ?>"></textarea>
                                        
                                                                                  </div>
                                                                         
                                                                    
                                                                        
                                                                       
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-primary" form="form-<?= $reclamacoe->id; ?>">Enviar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MODAL Resposta -->
                                                <tr>
                                                    <td><?= $reclamacoe->id; ?></td>
                                                    <td><?= $reclamacoe->n_protocolo; ?></td>
                                                    <td><?= $reclamacoe->nome; ?></td>
                                                    <td><?= $reclamacoe->email; ?></td>
                                                    <td><?= $reclamacoe->telefone; ?></td>
                                                    <td><?= $reclamacoe->estado; ?></td>
                                                    <td>
                                                        <div style="display: flex; justify-content: center;">
                                                            <button data-toggle="modal" data-target="#modalView<?= $reclamacoe->id; ?>" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-eye" aria-hidden="true"></i>Visualizar</button>
                                                            <button class="reclamacoes-eliminar btn btn-danger" target-id="<?= $reclamacoe->id ?>" style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include('includes/footer.php') ?>

            </div>
        </div>

        <script>
            window.onload = function() {
                let forms = document.getElementsByClassName("form-problem")
                let cards =  document.getElementsByClassName("card-problem")

                cards = Array.from(cards)

                Array.from(forms).forEach((form, index) => {
                    form.appendChild(cards[index])

                    // console.log(form.parentNode)
                })
            }
        </script>

        <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>

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
                    "sZeroRecords": "Nenhum Registro encontrado",
                    "sEmptyTable": "Nenhum Registro encontrado",
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