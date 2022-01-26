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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- MODAL ADD -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Adicionando um novo usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="store" action="<?= $router->route('usuarios.create') ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="Adicionar um nome">
                            </div>
                            <div class="form-group">
                                <label>Sobrenome</label>
                                <input type="text" name="sobrenome" class="form-control" placeholder="Adicionar um sobrenome">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Adicionar uma foto</label>
                                <input name="imagem" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="Insira um e-mail">
                            </div>
                            <!-- <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="Adicionar uma senha">
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputPassword1 tipos">Nível</label>
                                <select id="tipo" class="form-control" name="nivel" placeholder="Adicionar nível de acesso">
                                    <option value="Master">Master</option>
                                    <option value="Normal">Normal</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD -->

    <!-- MODAL EDIT -->
    <?php if (is_array($usuarios)) foreach ($usuarios as $key => $usuario) : ?>
        <div class="modal fade" id="edit_<?= $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Adicionando um novo usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="update" action="https://pgr.ao/gestor/usuarios/<?= $usuario->id ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="nome" value="<?= $usuario->nome ?>" class="form-control" placeholder="Adicionar um nome">
                                </div>
                                <div class="form-group">
                                    <label>Sobrenome</label>
                                    <input type="text" name="sobrenome" value="<?= $usuario->sobrenome ?>" class="form-control" placeholder="Adicionar um nome">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Click para alterar a foto</label>
                                    <input name="imagem" type="file" class="form-control" id="recipient-name">
                                    <img src="<?= URL_BASE_FILES . $usuario->foto ?>" width="150" class="table-user-thumb" alt="">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" value="<?= $usuario->email ?>" class="form-control" name="email" value="stelvio.tombela@infosi.gov.ao">
                                </div>
                                
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="senha" name="senha" value="<?= $usuario->senha ?>" class="form-control" name="senha">
                                </div>
                                
                                <!-- <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control" value="Adicionar uma senha">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1 tipos">Nível</label>
                                    <select id="tipo" class="form-control" name="nivel" placeholder="Alterar nível de acesso">
                                        <option value="Master">Master</option>
                                        <option value="Normal">Normal</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    <!-- END MODAL EDIT -->

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
                                            <h6>Usuários</h6>
                                            <h2>1</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?= $count ?>" aria-valuemin="0" aria-valuemax="200" style="width: <?= ($count / 100) * 200 ?>%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header row">
                            <div class="col col-sm-3">
                                <div class="card-options d-inline-block">
                                    <button style="margin: 5px;" class="btn btn-success" data-toggle="modal" data-target="#modalAdd" type="button"><i class="ik ik-plus"></i>Novo Usuário </button>

                                </div>
                            </div>
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
                                        <th>Foto</th>
                                        <th class="nosort">Nome</th>
                                        <th>Email</th>
                                        <th>Nível</th>
                                        <th style="text-align: center;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (is_array($usuarios)) foreach ($usuarios as $key => $usuario) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td style="text-align: center;"><img src="<?= URL_BASE_FILES . $usuario->foto ?>" class="table-user-thumb" alt=""></td>
                                            <td><?= $usuario->nome . " " . $usuario->sobrenome ?></td>
                                            <td><?= $usuario->email ?></td>
                                            <td><?= $usuario->nivel ?></td>
                                            <td>
                                                <div style="display: flex; justify-content: center;">
                                                    <button data-toggle="modal" data-target="#edit_<?= $key + 1 ?>" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                    <button class="usuarios-eliminar btn btn-danger" target-id ="<?= $usuario->id ?>" style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
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