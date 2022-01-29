<div
    style=" background-color: white; position: fixed; top: 0; border-bottom: 1px solid black; right: 0;left: 0; z-index: 1030;">
    <!-- ======= Header1 ======= -->
    <div class="container st" style="padding-right: 0px !important; padding-left: 0px !important; flex-wrap: wrap;">
        <header class="header">
            <div class="container d-flex logo"
                style="width: 70%; display: flex; justify-content: center; align-items: center;">
                <div class="logo mr-auto">
                    <a class="navbar-brand text-light" href="index">
                        <div class="logo-composition">
                            <img style="padding: 10px; padding-left: 0px; margin-top:20px; width: 280px !important;"
                                src="/site/img/log_pgr.png" alt="">
                        </div>
                    </a>
                </div>
            </div>



            <div class="inp" style="width: 40%; display: flex; justify-content: center; align-items: center;">
                <form action="pesquisar_noticias" method="post">
                    <div class="input-group">

                        <input id="pesquisar_noticias" type="text" name="pesquisar_noticias" class="form-control"
                            placeholder="Pesquisar">
                        <div class="input-group-append">

                            <button id="search-btn" class="btn btn-secondary" type="submit"
                                style="background-color: #800000;">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>

                    </div>
                </form>
            </div>

        </header>
    </div>
    <!-- End Header1 -->

    <!-- ======= Header2 ======= -->
    <header id="header">
        <div class="container d-flex" style="width: 100%; display: flex; justify-content: center; align-items: center;">

            <nav class="nav-menu d-none d-lg-block"
                style="display: flex; justify-content: center; align-items: center;">
                <ul>

                    <li><a href="{{ route('site.home') }}">Início</a></li>
                    <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu1`);">Institucional</a>
                        <ul class="menu1">
                            <li><a href="sobrepage">Sobre a PGR</a></li>
                            <li><a href="membrospage">Quem é Quem</a></li>
                            <!-- Novo Submenu
                                <li><a href="javascript:void(0);">Órgãos PGR</a></li>
                                Fim do Novo Submenu -->

                        </ul>
                    </li>

                    <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu2`);">Para o Cidadão</a>
                        <ul class="menu2">
                            <li><a href="denunciaspage">Denúncias</a></li>

                            <li><a href="reclamacoespage">Reclamações</a></li>
                        </ul>
                    </li>
                    <!-- Novo Menu -->
                    <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu3`);">Combate a Corrupção</a>
                        <ul class="menu3">
                            <li><a href="{{ route('site.dnpcc')}}">DNPCC</a></li>
                            <li><a href="{{ route('site.dniap')}}">DNIAP</a></li>
                            <li><a href="{{ route('site.senra')}}">SENRA</a></li>
                        </ul>
                    </li>
                    <!-- Fim do Novo Menu -->

                    <li><a href="{{ route('site.news') }}">Notícias</a></li>


                    <li class="drop-down"><a href="" onclick="mostrarAtivo(this, `menu4`);">Documentos</a>
                        <ul class="menu2">
                            <li><a href="legislacoespage">Legislações</a></li>

                            <li><a href="comunicados">Comunicados</a></li>
                            <li><a href="publicacoes">Publicações</a></li>
                            <li><a href="r_anuais">Relatórios Anuais</a></li>
                            <li><a href="outros_doc">Outros Documentos</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('site.contact') }}">Contactos</a></li>
                    <li><a href="https://webmail.pgr.ao/" target="_blank"><i class="fa fa-envelope"
                                aria-hidden="true"></i></a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header2 -->
</div>
