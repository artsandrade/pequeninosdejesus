<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
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
</head>

<body class="layout-login-centered-boxed">





    <div class="layout-login-centered-boxed__form card">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
                <img class="navbar-brand-icon mr-0 mb-2" src="/template_site/images/logo-pequeninos.png" width="350" alt="Stack">
            </a>
            <p class="m-0">Redefinir senha</p>
        </div>

        <form action="javascript:void(0)" method="POST" id="form-redefinir">
            @csrf
            <input type="hidden" name="url_form" id="url_form" value="{{route('redefinir_senha')}}">

            <div class="form-group">
                <label class="text-label" for="senha">Nova senha:</label>
                <div class="input-group input-group-merge">
                    <input id="senha" type="password" name="senha" required="" class="form-control form-control-prepended" placeholder="Insira a nova senha...">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit" id="btn-redefinir">Redefinir senha</button>
            </div>
            <div class="form-group text-center">
                <a href="/login">Fazer login com minha conta</a> <br>
            </div>
        </form>
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

    <div class="modal fade" id="modal-resposta" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mensagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="texto-resposta"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/public/template_painel/functionsJs/login.js" defer></script>

</body>

</html>