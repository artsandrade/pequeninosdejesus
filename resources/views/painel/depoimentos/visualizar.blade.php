@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Depoimentos</li>
    <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
  </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
@foreach($depoimentos as $depoimento)
<div class="card card-form">
  <div class="row no-gutters">
    <div class="col-lg-12 card-body">
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
        <div class="avatar avatar-xxl" data-toggle="tooltip" data-placement="top" title="{{$depoimento->nome}}">
          <img src="data:image/jpeg;base64, {{base64_encode($depoimento->foto)}}" alt="Avatar" class="avatar-img rounded-circle">
        </div>
      </div>
      <br>
      <div class="form-group text-right">
        <a href="/painel/depoimentos" class="btn btn-secondary">Voltar</a>
        <a href="/painel/depoimentos/alterar?id={{$depoimento->id_depoimento}}" class="btn btn-primary">Alterar</a>
      </div>
    </div>
  </div>
</div>
<script src="/public/template_painel/functionsJs/depoimentos.js" defer></script>
@endforeach
@stop