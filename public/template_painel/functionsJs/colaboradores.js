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

    if (document.getElementById('foto').value.length > 0) {
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
            texto_resposta.innerHTML = "Colaborador inserido com sucesso!";
            $('#modal-resposta').modal({
              show: true
            });
            $('#btn-inserir').html('Inserir');
            document.getElementById('form-inserir').reset();
          }
          else {
            if (response.resposta == 'vazio') {
              texto_resposta.innerHTML = "Por favor, verifique se todos os campos estão preenchidos!";
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
          texto_resposta.innerHTML = "Colaborador alterado com sucesso!";
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

function remover(id_colaborador) {
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
    url: "/painel/colaboradores/remover",
    method: 'post',
    data: {
      '_token': _token,
      'id_colaborador': id_colaborador
    },
    success: function (response) {

      if (response.resposta == 'removido') {
        window.location.href = "/painel/colaboradores";
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

function modalRemover(nome, id_colaborador) {
  var modal_texto = document.getElementById('modal-texto');
  var modal_botao = document.getElementById('modal-botao');
  
  modal_texto.innerHTML = 'Você tem certeza que deseja remover o colaborador <b>' + nome + '</b> ?';
  modal_botao.setAttribute('onclick', 'remover(\'' + id_colaborador + '\')');
  $('#modal-center').modal({
    show: true
  });
}