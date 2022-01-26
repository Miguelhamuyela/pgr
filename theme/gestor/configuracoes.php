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

    <link rel="icon" href="favi.png" type="image/x-icon" />

     <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="node_modules/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="node_modules/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="node_modules/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="node_modules/c3/c3.min.css">
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="dist/css/theme.min.css">
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="img/users/3.jpg" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Configurações</a>
                                <a class="dropdown-item" href="login.php"><i class="ik ik-power dropdown-icon"></i> Terminar Secção</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="page-wrap">
            <div class="app-sidebar colored">
                <div class="sidebar-header">
                    <a class="header-brand" href="index.php">
                        <div class="logo-img">
                            <img width="30" src="img/origin.png" class="header-brand-img" alt="lavalite">
                        </div>
                        <span class="text">Gestor</span>
                    </a>
                </div>

                <div class="sidebar-content">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                            <div class="nav-lavel">Gestão de Conteúdos</div>
                            <div class="nav-item">
                                <a href="index.php"><i class="fa fa-signal fa-lg"></i><span>Painel de Controle</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="banners.php"><i class="ik ik-image"></i><span>Banners</span></a>
                            </div>

                            <div class="nav-item">
                                <a href="info.php"><i class="fa fa-info fa-lg"></i><span>Informações</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="noticias.php"><i class="fa fa-newspaper"></i><span>Notícias</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="membros.php"><i class="fa fa-users fa-lg"></i><span>Membros</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="arquivos.php"><i class="fa fa-file fa-lg"></i><span>Arquivos</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="denuncias.php"><i class="fa fa-question fa-lg"></i><span>Denúncias</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="reclamacoes.php"><i class="fa fa-thumbs-down" aria-hidden="true"></i><span>Reclamações</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="comunicados.php"><i class="fa fa-info-circle"></i><span>Comunicados</span></a>
                            </div>

                            <div class="nav-item">
                                <a href="contactos.php"><i class="fa fa-phone"></i><span>Contactos</span></a>
                            </div>

                            <div class="nav-item">
                                <a href="usuarios.php"><i class="fa fa-user"></i><span>Usuários</span></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Configurações</h6>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-settings dropdown-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/users/3.jpg" height="140px" class="rounded-circle" width="150" />
                                        <h4 class="card-title mt-10">Stélvio Tombela</h4>
                                        <h5 class="card-title mt-10">stelvio.tombela@infosi.gov.ao</h5>
                                        <p class="card-subtitle">Master</p>
                                        <form action="">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Carregar nova foto</label>
                                                <input type="file" class="form-control" id="recipient-name">
                                            </div>
                                            <button class="btn btn-success" type="submit">Alterar Foto de Perfil</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <ul class="nav nav-pills custom-pills">
                                    <li class="nav-item">
                                        <a class="nav-link">Alterar Configurações de Usuário</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="example-name">Nome Completo</label>
                                                    <input type="text" value="Stélvio Tombela" class="form-control" name="example-name" id="example-name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="example-email">Email</label>
                                                    <input type="email" value="stelvio.tombela@infosi.gov.ao" class="form-control" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="example-password">Senha</label>
                                                    <input type="password" value="senha" class="form-control" name="example-password" id="example-password">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="example-phone">Telefone</label>
                                                    <input type="text" value="900 000 000" id="example-phone" name="example-phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="example-password">Morada</label>
                                                    <input type="text" value="Cacuaco" class="form-control" name="example-password" id="example-password">
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit">Actualizar Perfil</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="w-100 clearfix">
                    <span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 Procuradoria Geral da República. Todos os direitos reservados.</span>
                    <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Desenvolvido pelo <a target="_blank" style="text-decoration: none; color: #800000;" href="https://www.infosi.gov.ao/">INFOSI</a></span>
                </div>
            </footer>

        </div>
    </div>


    <script src="../../code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/screenfull/dist/screenfull.js"></script>
    <script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="node_modules/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
    <script src="node_modules/moment/moment.js"></script>
    <script src="node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="node_modules/d3/dist/d3.min.js"></script>
    <script src="node_modules/c3/c3.min.js"></script>
    <script src="js/tables.js"></script>
    <script src="js/widgets.js"></script>
    <script src="js/charts.js"></script>
    <script src="dist/js/theme.min.js"></script>
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
    </script><script src="tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: ".textarea",
            height: 300
        })
    </script>
    <script src="<?= asset('assets/js/main.js') ?>"></script>
    <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script>
</body>

</html>