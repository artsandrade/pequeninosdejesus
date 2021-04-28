@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Colaboradores</li>
    <li class="breadcrumb-item active" aria-current="page">Inserir</li>
  </ol>
</nav>
<h1 class="m-0">Inserir</h1>
@stop

@section('conteudo')
<div class="card card-form">
  <div class="row no-gutters">
    <div class="col-lg-12 card-body">
      <form id="form-inserir" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="url_form" id="url_form" value="{{route('colaborador_inserir')}}">
        <div class="row">
          <div class="form-group col-sm-12 col-md-10">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do colaborador...">
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <label for="situacao">Situação</label>
            <select class="form-control" name="situacao" id="situacao">
              <option value="1">Ativo</option>
              <option value="0">Desligado</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-12 col-md-7">
            <label for="funcao">Função</label>
            <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Insira a função do colaborador...">
          </div>
          <div class="form-group col-sm-12 col-md-3">
            <label for="desde">Desde</label>
            <input type="month" class="form-control" id="desde" name="desde">
          </div>
        </div>
        <div class="form-group">
          <label for="foto">Foto</label>
          <input type="file" class="form-control-file" accept=".jpeg, .jpg, .gif, .png" id="foto" name="foto">
        </div>
        <br>
        <div class="form-group text-right">
          <a href="/painel/colaboradores" class="btn btn-secondary">Voltar</a>
          <button type="submit" class="btn btn-primary" id="btn-inserir">Inserir</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="/public/template_painel/functionsJs/colaboradores.js" defer></script>

@stop

@section('footer_layout')

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