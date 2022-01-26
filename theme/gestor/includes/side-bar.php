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

    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="index.php">
                <div class="logo-img">
                    <img width="30" src="<?= assetGestor('img/origin.png') ?>" class="header-brand-img" alt="lavalite">
                </div>
                <span class="text">Gestor</span>
            </a>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Gestão de Conteúdos</div>
 
                   

                     

                    <div class="nav-item <?= active('') ?>">
                        <a href="<?= $router->route('gestor_index') ?>"><i class="fa fa-signal fa-lg"></i><span>Painel de Controle</span></a>
                    </div>
                    
                    
                    
                    <div class="nav-item <?= active('banners') ?> <?= active('banners') ?>">
                        <a href="<?= $router->route('bannerspage') ?>"><i class="ik ik-image"></i><span>Banners</span></a>
                    </div>
              


                    <div class="nav-item <?= active('informacoes') ?>">
                        <a href="<?= $router->route('informacoespage') ?>"><i class="fa fa-info fa-lg"></i><span>Informações</span></a>
                    </div>
                    <div class="nav-item <?= active('noticias') ?>">
                        <a href="<?= $router->route('gestornoticiaspage') ?>"><i class="fa fa-newspaper"></i><span>Notícias</span></a>
                    </div>

                   

                    <div class="nav-item <?= active('galeria') ?> <?= active('galeria') ?>">
                        <a href="<?= $router->route('galeriapage') ?>"><i class="fa fa-camera"></i><span>Galeria</span></a>
                    </div>
               


                    <div class="nav-item <?= active('membros') ?>">
                        <a href="<?= $router->route('gestormembrospage') ?>"><i class="fa fa-users fa-lg"></i><span>Membros</span></a>
                    </div>
 
                    <!--
                        <div class="nav-item <?= active('arquivos') ?>">
                            <a href="<?= $router->route('arquivospage') ?>"><i class="fa fa-file fa-lg"></i><span>Arquivos</span></a>
                        </div>
                    -->
                    <div class="nav-item <?= active('denuncias') ?>">
                        <a href="<?= $router->route('gestordenunciaspage') ?>"><i class="fa fa-question fa-lg"></i><span>Denúncias</span></a>
                    </div>
                    <div class="nav-item <?= active('reclamacoes') ?>">
                        <a href="<?= $router->route('gestorreclamacoespage') ?>"><i class="fa fa-thumbs-down"></i><span>Reclamações</span></a>
                    </div>
                    
                      <!--
                    <div class="nav-item <?= active('comunicados') ?>">
                        <a href="<?= $router->route('gestorcomunicadospage') ?>"><i class="fa fa-info-circle"></i><span>Comunicados</span></a>
                    </div>
                      -->

                    <div class="nav-item <?= active('contactos') ?>">
                        <a href="<?= $router->route('contactospage') ?>"><i class="fa fa-phone"></i><span>Contactos</span></a>
                    </div>
               
      
                    

                    
                    <?php if(($_SESSION["usuario"]["nivel"]) == "Master" ): ?>
                      <div class="nav-item <?= active('usuarios') ?>">
                        <a href="<?= $router->route('usuariospage') ?>"><i class="fa fa-user"></i><span>Usuários</span></a>
                    </div>
                    <?php endif; ?>
                    
                   
                </nav>
            </div>
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