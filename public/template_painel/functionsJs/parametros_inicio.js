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


        $('#btn-alterar').html('Alterando...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#form-alterar').serialize(),
            success: function (response) {

                if (response.resposta == 'alterado') {
                    window.location.href = "/painel/parametros-inicio/alterar";
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