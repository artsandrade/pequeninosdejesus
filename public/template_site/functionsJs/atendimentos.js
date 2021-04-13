$(document).ready(function () {
    $('#btn-inserir').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var texto_resposta = document.getElementById('texto-resposta');
        texto_resposta.innerHTML = "";


        $('#btn-inserir').html('Enviando mensagem...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#contactForm').serialize(),
            success: function (response) {

                if (response.resposta == 'inserido') {
                    $('#contactForm').reset();
                    texto_resposta.innerHTML = "Mensagem encaminhada com sucesso! Por favor, aguarde que entraremos em contato o mais breve possível.";
                    $('#modal-resposta').modal({
                        show: true
                    });
                    $('#btn-inserir').html('Enviar mensagem');
                }
            },
            error: function () {
                texto_resposta.innerHTML = "Desculpe, mas tivemos um erro durante essa solicitação. Entre em contato com o suporte ou tente novamente mais tarde!";
                $('#modal-resposta').modal({
                    show: true
                });
                $('#btn-inserir').html('Alterar');
            }
        });
    });
});