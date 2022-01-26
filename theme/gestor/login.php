<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themekit.lavalite.org/demo/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 09:33:40 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Entrar PGR - Gestor</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= assetGestor('favi.png') ?>" type="image/x-icon" />

     <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="<?= assetGestor('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= assetGestor('node_modules/%40fortawesome/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= assetGestor('node_modules/ionicons/dist/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= assetGestor('node_modules/icon-kit/dist/css/iconkit.min.css') ?>">
    <link rel="stylesheet" href="<?= assetGestor('node_modules/perfect-scrollbar/css/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?= assetGestor('dist/css/theme.min.css') ?>">
</head>

<body>
    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100 bg-white">
                <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                    <div class="lavalite-bg" style="background-image: url('<?= assetGestor('img/edificio.jpeg') ?>')">
                        <div class="lavalite-overlay"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="#"><img width="70" src="<?= assetGestor('img/logo_black_hand.png') ?>" alt=""></a>
                        </div>
                        <h3>Entrar em Gestor</h3>
                        <p>Preencha suas credenciais para poder entrar!</p>
                        <form id="store" action="<?= $router->route('autenticacao.entrar') ?>">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="Usuário" required="">
                                <i class="ik ik-user"></i>
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha" required="">
                                <i class="ik ik-lock"></i>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <a href="pages/forgot-password.html">Recuperar Senha</a>
                                </div>
                            </div>
                            <div class="sign-btn text-center">
                                <a href="index.html"><button type="submit" class="btn btn-theme" style="width: 80px;height: 40px;background: #800000 !important;">Entrar</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= assetGestor('node_modules/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?= assetGestor('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= assetGestor('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= assetGestor('node_modules/screenfull/dist/screenfull.js') ?>"></script>
    <script src="<?= assetGestor('dist/js/theme.js') ?>"></script>
    <script src="<?= asset('assets/js/HttpRequest.js') ?>"></script> 
    <script src="<?= assetGestor('assets/js/main.js') ?>"></script>
    <script src="<?= assetGestor('assets/js/HttpRequest.js') ?>"></script>
    <script src="<?= assetGestor('js/HttpRequest.js') ?>"></script>
    <script src="<?= assetGestor('js/alert.js') ?>"></script>
</body>

</html>
</body>

</html>