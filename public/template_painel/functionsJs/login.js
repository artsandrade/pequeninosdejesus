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