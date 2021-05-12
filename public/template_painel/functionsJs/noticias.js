$(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#form-inserir').submit(function (e) {
        e.preventDefault();

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";

        var form = new FormData(this);

        if (document.getElementById('capa').value.length > 0) {
            $('#btn-inserir').html('Inserindo...');
            var url_atual = document.getElementById('url_form').value;
            $.ajax({
                url: "" + url_atual + "",
                method: 'post',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {

                    if (response.resposta == 'inserido') {
                        texto_resposta.innerHTML = "Notícia inserida com sucesso!";
                        $('#modal-resposta').modal({
                            show: true
                        });
                        $('#btn-inserir').html('Inserir');
                        window.location.reload();
                    } else {
                        if (response.resposta == 'vazio') {
                            texto_resposta.innerHTML = "Desculpe, mas é necessário que todos os campos estejam preenchidos!";
                            $('#modal-resposta').modal({
                                show: true
                            });
                            $('#btn-inserir').html('Inserir');
                        }
                    }
                },
                error: function () {
                    texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                    $('#modal-resposta').modal({
                        show: true
                    });
                    $('#btn-inserir').html('Inserir');
                }
            });
        }
        else {
            texto_resposta.innerHTML = "Desculpe, mas é necessário que todos os campos estejam preenchidos!";
            $('#modal-resposta').modal({
                show: true
            });
        }

    });
});

$(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#form-alterar').submit(function (e) {
        e.preventDefault();

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";

        var form = new FormData(this);

        $('#btn-alterar').html('Alterando...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: form,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {

                if (response.resposta == 'alterado') {
                    texto_resposta.innerHTML = "Notícia alterada com sucesso!";
                    $('#modal-resposta').modal({
                        show: true
                    });
                    $('#btn-alterar').html('Alterar');
                    window.location.href = "/painel/noticias";
                } else {
                    if (response.resposta == 'vazio') {
                        texto_resposta.innerHTML = "Desculpe, mas é necessário que todos os campos estejam preenchidos!";
                        $('#modal-resposta').modal({
                            show: true
                        });
                        $('#btn-alterar').html('Alterar');
                    }
                }
            },
            error: function () {
                texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                $('#modal-resposta').modal({
                    show: true
                });
                $('#btn-alterar').html('Alterar');
            }
        });

    });
});

function remover(id_noticia) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var texto_resposta = document.getElementById('texto-resposta');
    texto_resposta.innerHTML = "";
    var _token = document.getElementsByName('_token')[0].value;
    $('#modal-botao').html('Removendo...');

    $.ajax({
        url: "/painel/noticias/remover",
        method: 'post',
        data: {
            '_token': _token,
            'id_noticia': id_noticia
        },
        success: function (response) {

            if (response.resposta == 'removido') {
                window.location.href = "/painel/noticias";
                $('#modal-botao').html('Remover');
            }
        },
        error: function () {
            texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
            $('#modal-resposta').modal({
                show: true
            });
            $('#modal-botao').html('Remover');
        }
    });
}

function modalRemover(titulo, id_noticia) {
    var modal_texto = document.getElementById('modal-texto');
    var modal_botao = document.getElementById('modal-botao');

    modal_texto.innerHTML = 'Você tem certeza que deseja remover a notícia <b>' + titulo + '</b>?';
    modal_botao.setAttribute('onclick', 'remover(\'' + id_noticia + '\')');
    $('#modal-center').modal({
        show: true
    });
}