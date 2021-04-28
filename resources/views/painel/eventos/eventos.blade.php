@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Eventos</li>
  </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
  <div class="row no-gutters">
    <div class="col-lg-12 card-body">
      <table class="table table-striped table-bordered" id="myTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Data</th>
            <th>Título</th>
            <th>Local</th>
            <th>Situação</th>
            <th style="width: 60px;"></th>
          </tr>
        </thead>
        <tbody class="list" id="staff02">
          @foreach($eventos as $evento)
          <tr>
            <td>
              <span class="js-lists-values-employee-data">{{date('d/m/Y H:i', strtotime($evento->data))}}</span>
            </td>
            <td>
              <span class="js-lists-values-employee-name">{{$evento->nome}}</span>
            </td>
            <td>
              <span class="js-lists-values-login">{{$evento->local}}</span>
            </td>
            @if($evento->situacao==1)
            <td><span class="badge badge-success js-lists-values-status">Disponível</span></td>
            @else
            <td><span class="badge badge-danger js-lists-values-status">Cancelado</span></td>
            @endif
            <td>
              <a href="/painel/eventos/alterar?id={{$evento->id_evento}}" class="text-muted" title="Alterar"><i class="material-icons">create</i></a>
              <a href="#" class="text-muted" onclick="modalRemover('{{$evento->data}}','{{$evento->nome}}', '{{$evento->local}}','{{$evento->id_evento}}')" title="Remover"><i class="material-icons">delete</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="/public/template_painel/functionsJs/eventos.js" defer></script>
<script src="/public/template_painel/functionsJs/datatables.js" defer></script>

@stop

@section('footer_layout')
<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-center-title">Remover evento</h5>
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