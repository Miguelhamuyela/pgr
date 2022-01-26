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
            if (val.value == 'anuncio') {
                document.getElementById('imagem').style.display = 'block';
                document.getElementById('video').style.display = 'none';
                document.getElementById('descricao').style.display = 'none';
            }

            if (val.value == 'fotos') {
                document.getElementById('imagem').style.display = 'block';
                document.getElementById('video').style.display = 'none';
                document.getElementById('descricao').style.display = 'block';
            }

            if (val.value == 'videos') {
                document.getElementById('imagem').style.display = 'none';
                document.getElementById('video').style.display = 'block';
                document.getElementById('descricao').style.display = 'none';
            }
        }
    </script>
</head>

<body>

    <!-- MODAL ADD -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-file fa-lg"></i> Adicionando um novo Arquivo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="inputState">Tipo</label>
                            <select onchange="exibir_ocultar(this)" name="tipo" id="inputState" class="form-control-lg form-control" style="height: 45px !important;">
                                <option selected>Selecione o tipo:</option>
                                <option value="anuncio">Anúncio</option>
                                <option value="fotos">Fotos</option>
                                <option value="videos">Vídeos</option>
                            </select>
                        </div>
                        <div id="imagem" class="form-group">
                            <label for="recipient-name" class="col-form-label">Escolha a Imagem desejada</label>
                            <input type="file" class="form-control" id="recipient-name">
                        </div>
                        <div id="video" class="form-group">
                            <label for="recipient-name" class="col-form-label">Adicione a url do vídeo</label>
                            <input type="text" class="form-control">
                        </div>
                        <div id="descricao" class="form-group">
                            <label for="recipient-name" class="col-form-label">Descrição</label>
                            <textarea rows="5" class="form-control"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD -->

    <!-- MODAL EDIT -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-file fa-lg"></i> Alterando o Arquivo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Click para alterar a Imagem</label>
                            <input type="file" class="form-control" id="recipient-name">
                            <img src="img/users/1.jpg" width="150" class="table-user-thumb" alt="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Altere a url do vídeo</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Descrição</label>
                            <textarea rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputState">Tipo</label>
                            <select name="tipo" id="inputState" class="form-control-lg form-control" style="height: 45px !important;">
                                <option selected>Escolha o tipo:</option>
                                <option value="Mensagem do PGR">Mensagem do PGR</option>
                                <option value="Sobre a PGR">Sobre a PGR</option>
                                <option value="Edifício SEDE">Edifício SEDE</option>
                                <option value="Anúncio">Anúncio</option>
                                <option value="Fotos">Fotos</option>
                                <option value="Vídeos">Vídeos</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Editar</button>
                </div>
            </div>
        </div>
    </div>
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
                                            <h2>Arquivos</h2>
                                            <h5>Faça aqui o gerenciamento dos seus arquivos: </h5>
                                            <h6>- Galeria de Fotos e vídeos</h6>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-file fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        <th class="nosort">Imagem / Url</th>
                                        <th>Descrição</th>
                                        <th>Tipo</th>
                                        <th style="text-align: center;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td style="text-align: center;"><img src="img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                        <td>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Perferendis molestias consectetur modi, quidem libero labore!
                                            Optio fugiat voluptatum doloribus corporis asperiores quo eum
                                            voluptas perspiciatis, laudantium laboriosam soluta atque quas.
                                        </td>
                                        <td>Mensagem do PGR</td>
                                        <td>
                                            <div style="display: flex; justify-content: center;">
                                                <button data-toggle="modal" data-target="#modalEdit" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                <button style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>http://localhost/INFOSI/BackOffice_PGR/img/users/3.jpg</td>
                                        <td>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Perferendis molestias consectetur modi, quidem libero labore!
                                            Optio fugiat voluptatum doloribus corporis asperiores quo eum
                                            voluptas perspiciatis, laudantium laboriosam soluta atque quas.
                                        </td>
                                        <td>Sobre a PGR</td>
                                        <td>
                                            <div style="display: flex; justify-content: center;">
                                                <button data-toggle="modal" data-target="#modalEdit" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                <button style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>http://localhost/INFOSI/BackOffice_PGR/img/users/3.jpg</td>
                                        <td>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Perferendis molestias consectetur modi, quidem libero labore!
                                            Optio fugiat voluptatum doloribus corporis asperiores quo eum
                                            voluptas perspiciatis, laudantium laboriosam soluta atque quas.
                                        </td>
                                        <td>Edifício SEDE</td>
                                        <td>
                                            <div style="display: flex; justify-content: center;">
                                                <button data-toggle="modal" data-target="#modalEdit" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                <button style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td style="text-align: center;"><img src="img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                        <td>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Perferendis molestias consectetur modi, quidem libero labore!
                                            Optio fugiat voluptatum doloribus corporis asperiores quo eum
                                            voluptas perspiciatis, laudantium laboriosam soluta atque quas.
                                        </td>
                                        <td>Anúncio</td>
                                        <td>
                                            <div style="display: flex; justify-content: center;">
                                                <button data-toggle="modal" data-target="#modalEdit" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                <button style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td style="text-align: center;"><img src="img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                        <td>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Perferendis molestias consectetur modi, quidem libero labore!
                                            Optio fugiat voluptatum doloribus corporis asperiores quo eum
                                            voluptas perspiciatis, laudantium laboriosam soluta atque quas.
                                        </td>
                                        <td>Fotos</td>
                                        <td>
                                            <div style="display: flex; justify-content: center;">
                                                <button data-toggle="modal" data-target="#modalEdit" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                <button style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td style="text-align: center;"><img src="img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                        <td>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Perferendis molestias consectetur modi, quidem libero labore!
                                            Optio fugiat voluptatum doloribus corporis asperiores quo eum
                                            voluptas perspiciatis, laudantium laboriosam soluta atque quas.
                                        </td>
                                        <td>Vídeos</td>
                                        <td>
                                            <div style="display: flex; justify-content: center;">
                                                <button data-toggle="modal" data-target="#modalEdit" style="margin: 5px;" class="btn btn-primary" type="button"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>Editar</button>
                                                <button style="margin: 5px;" class="btn btn-danger" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i>Eliminar</button>
                                            </div>
                                        </td>
                                    </tr>
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