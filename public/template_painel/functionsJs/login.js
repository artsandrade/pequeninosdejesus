//Efetuar login
$(document).ready(function () {
    $('#btn-login').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";


        $('#btn-login').html('Entrando...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#form-login').serialize(),
            success: function (response) {

                if (response.resposta == 'liberado') {
                    window.location.href = "/painel";
                } else {
                    if (response.resposta == 'bloqueado') {
                        texto_resposta.innerHTML = "Desculpe, mas esse usuário encontra-se com acesso bloqueado!";
                        $('#modal-resposta').modal({
                            show: true
                        });
                        $('#btn-login').html('Entrar');
                    } else {
                        if (response.resposta == 'invalido') {
                            texto_resposta.innerHTML = "Email e/ou senha inválidos!";
                            $('#modal-resposta').modal({
                                show: true
                            });
                            $('#btn-login').html('Entrar');
                        }
                        else {
                            if (response.resposta == 'vazio') {
                                texto_resposta.innerHTML = "É necessário que e-mail e senha estejam preenchidos!'";
                                $('#modal-resposta').modal({
                                    show: true
                                });
                                $('#btn-login').html('Entrar');
                            }
                        }
                    }
                }
            },
            error: function () {
                texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                $('#modal-resposta').modal({
                    show: true
                });
                $('#btn-login').html('Entrar');
            }
        });
    });
});

//Solicitar senha
$(document).ready(function () {
    $('#btn-solicitar').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";


        $('#btn-solicitar').html('Solicitando senha...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#form-solicitar').serialize(),
            success: function (response) {

                if (response.resposta == 'enviado') {
                    texto_resposta.innerHTML = "Senha solicitada com sucesso. Verifique a caixa de entrada ou spam do e-mail, pois um link para recuperação foi encaminhado para ele!";
                    $('#modal-resposta').modal({
                        show: true
                    });
                    $('#btn-solicitar').html('Solicitar senha');
                } else {
                    if (response.resposta == 'vazio') {
                        texto_resposta.innerHTML = "Desculpe, mas é necessário que o e-mail esteja preenchido!";
                        $('#modal-resposta').modal({
                            show: true
                        });
                        $('#btn-solicitar').html('Solicitar senha');
                    } else {
                        if (response.resposta == 'invalido') {
                            texto_resposta.innerHTML = "Desculpe, mas não existe nenhuma conta para esse e-mail informado!";
                            $('#modal-resposta').modal({
                                show: true
                            });
                            $('#btn-solicitar').html('Solicitar senha');
                        }
                    }
                }
            },
            error: function () {
                texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                $('#modal-resposta').modal({
                    show: true
                });
                $('#btn-solicitar').html('Solicitar senha');
            }
        });
    });
});

//Redefinir senha
$(document).ready(function () {
    $('#btn-redefinir').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";


        $('#btn-redefinir').html('Solicitando senha...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#form-redefinir').serialize(),
            success: function (response) {

                if (response.resposta == 'alterado') {
                    texto_resposta.innerHTML = "Senha alterada com sucesso!";
                    $('#modal-resposta').modal({
                        show: true
                    });
                    $('#btn-redefinir').html('Redefinir senha');
                    window.location.href('/login');
                } else {
                    if (response.resposta == 'vazio') {
                        texto_resposta.innerHTML = "Desculpe, mas não foram localizados e-mail e/ou código de senha para essa solicitação!";
                        $('#modal-resposta').modal({
                            show: true
                        });
                        $('#btn-redefinir').html('Redefinir senha');
                    } else {
                        if (response.resposta == 'codigo_invalido') {
                            texto_resposta.innerHTML = "Desculpe, mas esse código já foi utilizado para redefinição de senha anteriormente!";
                            $('#modal-resposta').modal({
                                show: true
                            });
                            $('#btn-redefinir').html('Redefinir senha');
                        }
                    }
                }
            },
            error: function () {
                texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                $('#modal-resposta').modal({
                    show: true
                });
                $('#btn-redefinir').html('Redefinir senha');
            }
        });
    });
});

//Alterar senha
$(document).ready(function () {
    $('#btn-alterar').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";


        $('#btn-alterar').html('Alterando senha...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#form-alterar-senha').serialize(),
            success: function (response) {

                if (response.resposta == 'alterado') {
                    texto_resposta.innerHTML = "Senha alterada com sucesso!";
                    $('#modal-resposta').modal({
                        show: true
                    });
                    $('#btn-alterar').html('Alterar senha');
                } else {
                    if (response.resposta == 'vazio') {
                        texto_resposta.innerHTML = "Desculpe, mas ' necessário que a senha antiga e a nova senha estejam preenchidas para que possa realizar a alteração'!";
                        $('#modal-resposta').modal({
                            show: true
                        });
                        $('#btn-alterar').html('Alterar senha');
                    } else {
                        if (response.resposta == 'senha_incorreta') {
                            texto_resposta.innerHTML = "Desculpe, mas a senha antiga nào confere com a senha cadastrada para esse usuário!";
                            $('#modal-resposta').modal({
                                show: true
                            });
                            $('#btn-alterar').html('Alterar senha');
                        }
                    }
                }
            },
            error: function () {
                texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                $('#modal-resposta').modal({
                    show: true
                });
                $('#btn-alterar').html('Alterar senha');
            }
        });
    });
});