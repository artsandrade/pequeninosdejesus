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


    $('#btn-inserir').html('Inserindo...');
    var url_atual = document.getElementById('url_form').value;
    $.ajax({
      url: "" + url_atual + "",
      method: 'post',
      data: $('#form-inserir-evento').serialize(),
      success: function (response) {

        if (response.resposta == 'inserido') {
          texto_resposta.innerHTML = "Evento inserido com sucesso!";
            $('#modal-resposta').modal({
              show: true
            });
            $('#btn-inserir').html('Inserir');
            document.getElementById('form-inserir-evento').reset();
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
  });
});

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
      data: $('#form-alterar-evento').serialize(),
      success: function (response) {

        if (response.resposta == 'alterado') {
          texto_resposta.innerHTML = "Evento alterado com sucesso!";
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

function remover(id_evento) {
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
      url: "/painel/eventos/remover",
      method: 'post',
      data: {
          '_token': _token,
          'id_evento': id_evento
      },
      success: function (response) {

          if (response.resposta == 'removido') {
              window.location.href = "/painel/eventos";
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

function modalRemover(data, nome, local, id_evento) {
  var modal_texto = document.getElementById('modal-texto');
  var modal_botao = document.getElementById('modal-botao');
  var dt = new Date(data);
  hr = dt.toLocaleTimeString();
  dt = dt.toLocaleDateString();

  modal_texto.innerHTML = 'Você tem certeza que deseja remover Evento: <b>' + nome + '</b>, Local: ' + local + ', Data/hora: ' + dt + ' ' + hr + '?';
  modal_botao.setAttribute('onclick', 'remover(\'' + id_evento + '\')');
  $('#modal-center').modal({
      show: true
  });
}