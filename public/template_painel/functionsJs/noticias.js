// Initialize QUill editor
var quill = new Quill('#editor-container', {
    modules: {
        toolbar: [
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['image', 'code-block'],
            ['link'],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            ['clean']
        ]
    },
    placeholder: 'Escreva aqui sua notícia...',
    theme: 'snow'  // or 'bubble'
});
var html = '<h1>Hello</h1><p>World</p>';

var delta = quill.clipboard.dangerouslyPasteHTML(html);
quill.setContents(delta, 'silent');


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

        console.log(quill.root.innerHTML);
        var noticia = document.getElementById('noticia');
        noticia.value = quill.root.innerHTML;
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
                        window.location.href = "/painel/noticias";
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

        console.log(quill.root.innerHTML);
        var noticia = document.getElementById('noticia');
        noticia.value = quill.root.innerHTML;
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