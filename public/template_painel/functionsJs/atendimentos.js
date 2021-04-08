function visualizaAtendimento(id_atendimento, nome, nome_aluno, cpf_aluno, email, telefone, celular, assunto, mensagem, situacao){
    document.getElementById('id_atendimento').value = id_atendimento;
    document.getElementById('nome').value = nome;
    document.getElementById('nome_aluno').value = nome_aluno;
    document.getElementById('cpf_aluno').value = cpf_aluno;
    document.getElementById('email').value = email;
    document.getElementById('telefone').value = telefone;
    document.getElementById('celular').value = celular;
    document.getElementById('assunto').value = assunto;
    document.getElementById('mensagem').value = mensagem;
    document.getElementById('situacao').value = situacao;

    $('#modal-center').modal({
        show: true
    });
}

$(document).ready(function () {
    $('#btn-alterar').click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn-alterar').html('Alterando...');
        var url_atual = document.getElementById('url_form').value;
        $.ajax({
            url: "" + url_atual + "",
            method: 'post',
            data: $('#form-atendimento').serialize(),
            success: function () {
                $('#btn-alterar').html('Alterar');
                window.location.href = "/painel/atendimentos";
            },
            error: function () {
                $('#btn-alterar').html('Alterar');
            }
        });
    });
});