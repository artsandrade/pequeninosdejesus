$("#imagem").fileinput({
  'showUpload': false,
  'previewFileType': 'any',
  'language': 'pt-BR'
});

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
    if (document.getElementById('imagem').value.length > 0) {
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
            texto_resposta.innerHTML = "Imagens inseridas na galeria com sucesso!";
            $('#modal-resposta').modal({
              show: true
            });
            $('#btn-inserir').html('Inserir');
          }
          else {
            if (response.resposta == 'vazio') {
              texto_resposta.innerHTML = "Por favor, verifique se todos os campos estão preenchidos!";
              $('#modal-resposta').modal({
                show: true
              });
              $('#btn-inserir').html('Inserir');
            }
            else {
              if (response.resposta == 'email_cadastrado') {
                texto_resposta.innerHTML = "Desculpe, mas o e-mail informado já está sendo utilizado por um usuário!";
                $('#modal-resposta').modal({
                  show: true
                });
                $('#btn-inserir').html('Inserir');
              }
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
          texto_resposta.innerHTML = "Imagens alteradas na galeria com sucesso!";
          $('#modal-resposta').modal({
            show: true
          });
          $('#btn-alterar').html('Alterar');
        }
        else {
          if (response.resposta == 'vazio') {
            texto_resposta.innerHTML = "Por favor, verifique se todos os campos estão preenchidos!";
            $('#modal-resposta').modal({
              show: true
            });
            $('#btn-alterar').html('Alterar');
          }
          else {
            if (response.resposta == 'email_cadastrado') {
              texto_resposta.innerHTML = "Desculpe, mas o e-mail informado já está sendo utilizado por um usuário!";
              $('#modal-resposta').modal({
                show: true
              });
              $('#btn-alterar').html('Alterar');
            }
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

function remover(id_album) {
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
    url: "/painel/galeria/remover",
    method: 'post',
    data: {
      '_token': _token,
      'id_album': id_album
    },
    success: function (response) {

      if (response.resposta == 'removido') {
        window.location.href = "/painel/galeria";
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

function removerImagem(id_imagem, imagem, album_id) {
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
    url: "/painel/galeria/remover_imagem",
    method: 'post',
    data: {
      '_token': _token,
      'id_imagem': id_imagem,
      'imagem': imagem,
      'album_id': album_id,
    },
    success: function (response) {

      if (response.resposta == 'removido') {
        location.reload();
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

function modalRemover(nome, id_album) {
  var modal_texto = document.getElementById('modal-texto');
  var modal_botao = document.getElementById('modal-botao');

  modal_texto.innerHTML = 'Você tem certeza que deseja remover o álbum <b>' + nome + '</b>?';
  modal_botao.setAttribute('onclick', 'remover(\'' + id_album + '\')');
  $('#modal-center').modal({
    show: true
  });
}

function modalRemoverImagem(id_imagem, imagem, album_id) {
  var modal_botao = document.getElementById('modal-botao');

  modal_botao.setAttribute('onclick', 'removerImagem(\'' + id_imagem + '\', \'' + imagem + '\', \'' + album_id + '\')');
  $('#modal-center').modal({
    show: true
  });
}