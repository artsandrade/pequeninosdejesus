var $cpf_aluno = $("#cpf_aluno");
$cpf_aluno.mask('000.000.000-00');

var $telefone = $("#telefone");
$telefone.mask('(00) 0000-0000');

var $celular = $("#celular");
$celular.mask('(00) 00000-0000');

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

        if (document.getElementById('nome').value.length > 0 && document.getElementById('nome_aluno').value.length > 0 && document.getElementById('cpf_aluno').value.length > 0 && document.getElementById('assunto').value.length > 0 && document.getElementById('mensagem').value.length > 0) {
            $('#btn-inserir').html('Enviando mensagem...');
            var url_atual = document.getElementById('url_form').value;
            $.ajax({
                url: "" + url_atual + "",
                method: 'post',
                data: $('#contactForm').serialize(),

            });
            $('#contactForm')[0].reset();
            texto_resposta.innerHTML = "Mensagem encaminhada com sucesso! Por favor, aguarde que entraremos em contato o mais breve possível.";
            $('#modal-resposta').modal({
                show: true
            });
            $('#btn-inserir').html('Enviar mensagem');
        }
        else {
            texto_resposta.innerHTML = "Por favor, verifique se os campos: nome, nome aluno, CPF aluno, assunto e mensagem estão preenchidos!";
            $('#modal-resposta').modal({
                show: true
            });
        }

    });
});