@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Colaboradores</li>
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
            <th>Nome</th>
            <th>Função</th>
            <th>Situação</th>
            <th style="width: 85px;"></th>
          </tr>
        </thead>
        <tbody class="list" id="staff02">
          @foreach($colaboradores as $colaborador)
          <tr>
            <td>
              <span class="js-lists-values-employee-name">{{$colaborador->nome}}</span>
            </td>
            <td>
              <span class="js-lists-values-login">{{$colaborador->funcao}}</span>
            </td>
            @if($colaborador->situacao==1)
            <td><span class="badge badge-success js-lists-values-status">ATIVO</span></td>
            @else
            <td><span class="badge badge-danger js-lists-values-status">DESLIGADO</span></td>
            @endif
            <td>
              <a href="/painel/colaboradores/alterar?id={{$colaborador->id_colaborador}}" class="text-muted" title="Alterar"><i class="material-icons">create</i></a>
              <a href="/painel/colaboradores/visualizar?id={{$colaborador->id_colaborador}}" class="text-muted" title="Visualizar"><i class="material-icons">visibility</i></a>
              @if(session('usuario_tipo_usuario')=='1')
              <a href="#" class="text-muted" onclick="modalRemover('{{$colaborador->nome}}','{{$colaborador->id_colaborador}}')" title="Remover"><i class="material-icons">delete</i></a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="/public/template_painel/functionsJs/colaboradores.js" defer></script>
<script src="/public/template_painel/functionsJs/datatables.js" defer></script>

@stop

@section('footer_layout')
<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-center-title">Remover usuário</h5>
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