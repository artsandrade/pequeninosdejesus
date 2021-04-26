
$(document).ready(function (e) {
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $('#form-inserir-prestacao').submit(function (e) {
      e.preventDefault();

      var texto_resposta = document.getElementById('texto-resposta');
      texto_resposta.innerHTML = "";

      var form = new FormData(this);

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
                      texto_resposta.innerHTML = "Prestação de contas inserida com sucesso!";
                      $('#modal-resposta').modal({
                          show: true
                      });
                      $('#btn-inserir').html('Inserir');
                      window.location.href = "/painel/prestacao-de-contas";
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

  });
});

$(document).ready(function (e) {
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $('#form-alterar-prestacao').submit(function (e) {
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
                      texto_resposta.innerHTML = "Prestação de contas alterada com sucesso!";
                      $('#modal-resposta').modal({
                          show: true
                      });
                      $('#btn-alterar').html('Alterar');
                      window.location.href = "/painel/prestacao-de-contas";
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


function remover(id_prestacao) {
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
      url: "/painel/prestacao-de-contas/remover",
      method: 'post',
      data: {
          '_token': _token,
          'id_prestacao': id_prestacao
      },
      success: function (response) {

          if (response.resposta == 'removido') {
              window.location.href = "/painel/prestacao-de-contas";
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

function modalRemover(data, titulo, id_prestacao) {
  var modal_texto = document.getElementById('modal-texto');
  var modal_botao = document.getElementById('modal-botao');
  var dt = new Date(data);
  dt = dt.toLocaleDateString();

  modal_texto.innerHTML = 'Você tem certeza que deseja remover a prestação de contas <b>' + titulo + '</b> com data de ' + dt + '?';
  modal_botao.setAttribute('onclick', 'remover(\'' + id_prestacao+ '\')');
  $('#modal-center').modal({
      show: true
  });
}