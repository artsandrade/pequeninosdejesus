<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/template_site/images/icone.ico">
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

    <!-- Dropzone -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/css/fileinput.min.css" integrity="sha512-A/XiYKl0I56Nxg43kogQlAnLUbGRVGcT3J2Ni9b73+blF89rmMJ6qL9iHhPR/vDOsjcylhEoiQfzHzGHS+K/lQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/themes/explorer-fa/theme.min.css" integrity="sha512-i77c8D4vLkvEhQeXQnxDnGNXxNwDfT/tkJW/N5uycy3955czX+LkOLuWCfud42f9GAaSEehPNgS3yc3sUcuRlA==" crossorigin="anonymous" />
    <!-- Quill Theme -->
    <link type="text/css" href="/template_painel/css/vendor-quill.css" rel="stylesheet">
    <link type="text/css" href="/template_painel/css/vendor-quill.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="/template_painel/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body class="layout-default">
    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main pr-0" style="background-color: #3F4095;" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="/painel" class="navbar-brand">
                            <img class="navbar-brand-icon" src="/template_site/images/logo-pequeninos.png" width="150" alt="Stack">
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <img src="data:image/jpeg;base64, {{base64_encode( session('usuario_avatar') )}}" class="rounded-circle" width="32" alt="Avatar">
                                    <span class="ml-1 d-flex-inline">
                                        <span class="text-light">{{session('usuario_nome')}}</span>
                                    </span>
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div><strong>{{session('usuario_nome')}}</strong></div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/painel">Painel de controle</a>
                                    <a class="dropdown-item" href="/painel/meu-perfil">Meu perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-sair">Sair</a>
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
                                <br>
                                @if(session('usuario_tipo_usuario')=='1' || session('usuario_tipo_usuario')=='4')
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
                                @endif
                                @if(session('usuario_tipo_usuario')=='1' || session('usuario_tipo_usuario')=='2')
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#colaboradores_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-chalkboard-teacher"></i>
                                        <span class="sidebar-menu-text">Colaboradores</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="colaboradores_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/colaboradores/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/colaboradores">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#depoimentos_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-book-reader"></i>
                                        <span class="sidebar-menu-text">Depoimentos</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="depoimentos_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/depoimentos/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/depoimentos">
                                                <span class="sidebar-menu-text">Visualizar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#eventos_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-calendar"></i>
                                        <span class="sidebar-menu-text">Eventos</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="eventos_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/eventos/inserir">
                                                <span class="sidebar-menu-text">Inserir</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/eventos">
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
                                @endif
                                @if(session('usuario_tipo_usuario')=='1')
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#parametros_inicio_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-tools"></i>
                                        <span class="sidebar-menu-text">Parâmetros início</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="parametros_inicio_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="/painel/parametros-inicio/alterar">
                                                <span class="sidebar-menu-text">Alterar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                @if(session('usuario_tipo_usuario')=='1' || session('usuario_tipo_usuario')=='3')
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
                                @endif
                                @if(session('usuario_tipo_usuario')=='1')
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
                                @endif
                                <hr>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="/">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left fas fa-arrow-left"></i>
                                        <span class="sidebar-menu-text">Retornar ao site</span>
                                    </a>
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

    <!-- Chart Samples -->
    <script src="/template_painel/js/page.dashboard.js"></script>

    <!-- Dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js" integrity="sha512-1FvXwt9wkKd29ilILHy0zei6ScE5vdEKqZ6BSW+gmM7mfqC4T4256OmUfFzl1FkaNS3FUQ/Kdzrrs8SD83bCZA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/locales/pt-BR.min.js" integrity="sha512-Cpx57sl+l6IQEV+QXTm2mOCSQW04rlH7Bid1PzoHvJw2rH1vwJgVDWIpOOzi7KhszYPFpK7GiXuOSg1EKDOjtA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/themes/explorer-fa/theme.min.js" integrity="sha512-GIar09IA3mug1lRQk9WNNf8k5Qee4zYPXlu70pj63kvYUAGitsRXJc3bUmUt/+57EBYgrHcTvI6MwMkLU0b48w==" crossorigin="anonymous"></script>
    <!-- Quill -->
    <script src="/template_painel/vendor/quill.min.js"></script>
    <script src="/template_painel/js/quill.js"></script>

    <!-- Vector Maps -->
    <script src="/template_painel/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="/template_painel/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="/template_painel/js/vector-maps.js"></script>

    <!-- List.js -->
    <script src="/template_painel/vendor/list.min.js"></script>
    <script src="/template_painel/js/list.js"></script>

    <!-- Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/translations/pt-br.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    @yield('footer_layout')

    <div id="modal-sair" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-center-title">Sair</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja sair do seu perfil?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                    <a href="/logout" class="btn btn-danger">Sair</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>