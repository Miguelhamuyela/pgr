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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <!-- MODAL ADD -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-users fa-lg"></i> Adicionando um novo Membro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="store" action="<?= $router->route('membros.create') ?>">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Escolha a Imagem desejada</label>
                            <input name="imagem" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input name="nome" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sobrenome</label>
                            <input name="sobrenome" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input name="email" type="text" class="form-control">
                        </div>

                    
                        <div class="form-group">
                            <label for="inputState">Cargo</label>
                            <select name="cargo" id="inputState" class="form-control-lg form-control" style="height: 45px !important;">
                                <option selected>Selecione a categoria:</option>
                                <option value="Procurador Geral da República">Procurador Geral da República</option>
                                <option value="Vice-Procurador Geral da República">Vice-Procurador Geral da República</option>
                                <option value="Vice-Procurador Geral da República, Procurador Militar">Vice-Procurador Geral da República, Procurador Militar</option>
                                <option value="Direcção">Direcção</option>
                                <option value="Órgãos Nacionais">Órgãos Nacionais</option>
                                <option value="Órgãos Regionais">Órgãos Regionais</option>
                                <option value="Orgãos Provinciais">Orgãos Provinciais</option>
                            </select>
                        </div>

  
                        <div class="form-group">
                            <label for="inputState">Categoria</label>
                            <select name="categoria" id="inputState" class="form-control-lg form-control" style="height: 45px !important;">
                                <option selected>Selecione a categoria:</option>
                                <option value="Direcção Central">Direcção Central</option>
                                <option value="Direcção">Direcção</option>
                                <option value="Órgãos Nacionais">Órgãos Nacionais</option>
                                <option value="Órgãos Regionais">Órgãos Regionais</option>
                                <option value="Orgãos Provinciais">Orgãos Provinciais</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD -->

    <!-- MODAL EDIT -->
    <?php if (is_array($membros)) foreach ($membros as $key => $membro) : ?>
        <div class="modal fade" id="edit_<?= $key + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-users fa-lg"></i> Alterando o Membro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="update" action="https://pgr.ao/gestor/membros/<?= $membro->id ?>">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Click para alterar a Imagem</label>
                                <input name="imagem" type="file" class="form-control" id="recipient-name">
                                <img src="<?= URL_BASE_FILES . $membro->fotografia ?>" width="150" class="table-user-thumb" alt="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome</label>
                                <input name="nome" type="text" class="form-control" value="<?= $membro->nome ?>">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sobrenome</label>
                                <input name="nome" type="text" class="form-control" value="<?= $membro->sobrenome ?>">
                            </div>


                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Cargo</label>
                                <input name="cargo" type="text" class="form-control" value="<?= $membro->cargo ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Categoria</label>
                                <select name="categoria" id="inputState" class="form-control-lg form-control" style="height: 45px !important;">
                                    <option value="">Altere a categoria:</option>
                                    <option value="Direcção Central">Direcção Central</option>
                                <option value="Direcção">Direcção</option>
                                <option value="Órgãos Nacionais">Órgãos Nacionais</option>
                                <option value="Órgãos Regionais">Órgãos Regionais</option>
                                <option value="Orgãos Provinciais">Orgãos Provinciais</option>
                                </select>
                            </div>

                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </form>
                    </div>
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
                                            <h2>Membros</h2>
                                            <h5>Faça aqui o gerenciamento dos membros </h5>
                                          

                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-users fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION["usuario"]["nivel"])): ?>
                    <div class="card">
                        <div class="card-header row">
                            <div class="col col-sm-3">
                                <div class="card-options d-inline-block">
                               <button style="margin: 5px;" class="btn btn-success" data-toggle="modal" data-target="#modalAdd" type="button"><i class="ik ik-plus"></i>Adicionar</button>     

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
                                        <th class="nosort">Imagem</th>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>Cargo</th>
                                        <th>Categoria</th>
                                        <th style="text-align: center;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (is_array($membros)) foreach ($membros as $key => $membro) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><img src="<?= URL_BASE_FILES . $membro->fotografia ?>" class="table-user-thumb" alt=""></td>
                                            <td><?= $membro->nome ?></td>
                                            <td><?= $membro->sobrenome ?></td>
                                            <td><?= $membro->cargo ?></td>
                                            <td><?= $membro->categoria ?></td>
                                            <td>
                                                <div style="display: flex; justify-content: center;">
                                                    <button data-toggle="modal" data-target="#edit_<?= $key + 1 ?>" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                     <button class="membros-eliminar btn btn-danger" target-id ="<?= $membro->id ?>" style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                               
                                                    
                                                           </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php else: ?>
                     <div class="card">
                        <div class="card-header row">
                            <div class="col col-sm-3">
                                <div class="card-options d-inline-block">
                                
                                </div>
                            </div>
                            <div class="col col-sm-6">
                                <div class="card-search with-adv-search dropdown">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="advanced" class="table" style="margin-left: 1px !important;width: 100% !important;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="nosort">Imagem</th>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>Cargo</th>
                                        <th>Categoria</th>
                                        <th style="text-align: center;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody> 
                               
                                    <?php if (is_array($membros)) foreach ($membros as $key => $membro) : ?>
                                    
                                        <?php if($membro->id == $_SESSION["membros"]["id"]): ?>
                                            <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><img src="<?= URL_BASE_FILES . $membro->fotografia ?>" class="table-user-thumb" alt=""></td>
                                            <td><?= $membro->nome ?></td>
                                            <td><?= $membro->sobrenome ?></td>
                                            <td><?= $membro->cargo ?></td>
                                            <td><?= $membro->categoria ?></td>
                                            <td>
                                                <div style="display: flex; justify-content: center;">
                                                    <button data-toggle="modal" data-target="#edit_<?= $key + 1 ?>" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endif?>
                                      
                                    <?php endforeach; ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif; ?>


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
    </script><script src="<?= assetGestor('tinymce/tinymce.min.js') ?>"></script>
    <script>
        tinymce.init({
            selector: ".textarea",
            height: 300
        })
    </script>
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>
    <script src="<?= asset('js/HttpRequest.js') ?>"></script>
      <script src="<?= asset('js/alert.js') ?>"></script>
</body>

<!-- Mirrored from themekit.lavalite.org/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 09:29:57 GMT -->

</html>