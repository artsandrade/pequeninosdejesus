<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Painel de controle</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="/template_painel/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="/template_painel/css/app.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="/template_painel/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="/template_painel/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="/template_painel/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="/template_painel/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">

</head>

<body class="layout-default">
    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand ">
                            <img class="navbar-brand-icon" src="/template_painel/images/stack-logo-white.svg" width="22" alt="Stack">
                            <span>Stack</span>
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <img src="/template_painel/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                    <span class="ml-1 d-flex-inline">
                                        <span class="text-light">Dhouglas</span>
                                    </span>
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div><strong>Dhouglas</strong></div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item active" href="/painel">Painel de controle</a>
                                    <a class="dropdown-item" href="/painel/perfil">My profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                @yield('cabecalho')
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid page__container">
                        @yield('conteudo')

                    </div>

                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#atendimentos_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-phone"></i>
                                        <span class="sidebar-menu-text">Atendimentos</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="atendimentos_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/atendimentos">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#galeria_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-images"></i>
                                        <span class="sidebar-menu-text">Galeria</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="galeria_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/galeria/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/galeria">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#noticias_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-newspaper"></i>
                                        <span class="sidebar-menu-text">Notícias</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="noticias_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/noticias/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/noticias">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#prestacao_de_contas_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-hand-holding-usd"></i>
                                        <span class="sidebar-menu-text">Prestação de contas</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="prestacao_de_contas_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/prestacao-de-contas/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/prestacao-de-contas">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#usuarios_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-users"></i>
                                        <span class="sidebar-menu-text">Usuários</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="usuarios_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/usuarios/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/usuarios">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="/template_painel/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="/template_painel/vendor/popper.min.js"></script>
    <script src="/template_painel/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="/template_painel/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="/template_painel/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="/template_painel/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="/template_painel/js/toggle-check-all.js"></script>
    <script src="/template_painel/js/check-selected-row.js"></script>
    <script src="/template_painel/js/dropdown.js"></script>
    <script src="/template_painel/js/sidebar-mini.js"></script>
    <script src="/template_painel/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="/template_painel/js/app-settings.js"></script>



    <!-- Flatpickr -->
    <script src="/template_painel/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="/template_painel/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="/template_painel/js/settings.js"></script>

    <!-- Chart.js -->
    <script src="/template_painel/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="/template_painel/js/charts.js"></script>

    <!-- Chart Samples -->
    <script src="/template_painel/js/page.dashboard.js"></script>

    <!-- Vector Maps -->
    <script src="/template_painel/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="/template_painel/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="/template_painel/js/vector-maps.js"></script>

</body>

</html>