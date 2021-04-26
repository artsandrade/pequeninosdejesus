@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Prestação de contas</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name", "js-lists-values-data"]'>

                <div class="search-form search-form--light m-3">
                    <input type="text" class="form-control search" placeholder="Pesquisar">
                    <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                </div>

                <table class="table mb-0 thead-border-top-0">
                    <thead>
                        <tr>
                            <th style="width: 80px;">Data</th>
                            <th>Título</th>
                            <th style="width: 125px;"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="staff02">
                        @foreach($prestacoes as $prestacao)
                        <tr>
                            <td>
                                <span class="js-lists-values-employee-name">{{date('m/Y', strtotime($prestacao->data))}}</span>
                            </td>
                            <td><small class="text-muted js-lists-values-data">{{$prestacao->titulo}}</small></td>
                            <td>
                                <a href="/painel/prestacao-de-contas/visualizar?id={{$prestacao->id_prestacao}}" class="text-muted" title="Visualizar"><i class="material-icons">visibility</i></a>
                                <a href="/painel/prestacao-de-contas/alterar?id={{$prestacao->id_prestacao}}" class="text-muted" title="Alterar"><i class="material-icons">create</i></a>
                                <a href="#" class="text-muted" onclick="modalRemover('{{$prestacao->data}}','{{$prestacao->titulo}}', '{{$prestacao->id_prestacao}}')" title="Remover"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/public/template_painel/functionsJs/prestacao_de_contas.js" defer></script>
@stop

@section('footer_layout')
<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-center-title">Remover prestação de contas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modal-texto"></p>
      </div>
      <div class="modal-footer">
        @csrf
        <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
        <button type="submit" id="modal-botao" class="btn btn-danger">Remover</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-resposta" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="texto-resposta"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
@stop
