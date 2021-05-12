@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Depoimentos</li>
    <li class="breadcrumb-item active" aria-current="page">Alterar</li>
  </ol>
</nav>
<h1 class="m-0">Alterar</h1>
@stop

@section('conteudo')
@foreach($depoimentos as $depoimento)
<div class="card card-form">
  <div class="row no-gutters">
    <div class="col-lg-12 card-body">
      <form id="form-alterar" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="url_form" id="url_form" value="{{route('depoimento_alterar')}}">
        <input type="hidden" name="id_depoimento" value="{{$depoimento->id_depoimento}}">
        <div class="row">
          <div class="form-group col-sm-12 col-md-10">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$depoimento->nome}}">
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{$depoimento->tipo}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-12">
            <label for="depoimento">Depoimento</label>
            <textarea class="form-control" name="depoimento" id="depoimento" cols="1" rows="3">{{$depoimento->depoimento}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="foto">Foto</label>
          <input type="file" class="form-control-file" accept=".jpeg, .jpg, .gif, .png" id="foto" name="foto">
          <div class="avatar avatar-xxl" data-toggle="tooltip" data-placement="top" title="{{$depoimento->nome}}">
            <img src="data:image/jpeg;base64, {{base64_encode($depoimento->foto)}}" alt="Avatar" class="avatar-img rounded-circle">
          </div>
        </div>
        <br>
        <div class="form-group text-right">
          <a href="/painel/depoimentos" class="btn btn-secondary">Voltar</a>
          <button type="submit" class="btn btn-primary" id="btn-alterar">Alterar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="/public/template_painel/functionsJs/depoimentos.js" defer></script>
@endforeach
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