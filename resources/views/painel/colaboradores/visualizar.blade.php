@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Colaboradores</li>
    <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
  </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
@foreach($colaboradores as $colaborador)
<div class="card card-form">
  <div class="row no-gutters">
    <div class="col-lg-12 card-body">
      <div class="row">
        <div class="form-group col-sm-12 col-md-10">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do colaborador..." value="{{$colaborador->nome}}" readonly>
        </div>
        <div class="form-group col-sm-12 col-md-2">
          <label for="situacao">Situação</label>
          <select class="form-control" name="situacao" id="situacao" disabled>
            <option value="1" {{$colaborador->situacao==1?'selected':''}}>Ativo</option>
            <option value="0" {{$colaborador->situacao==0?'selected':''}}>Desligado</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-12 col-md-7">
          <label for="funcao">Função</label>
          <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Insira a função do colaborador..." value="{{$colaborador->funcao}}" readonly>
        </div>
        <div class="form-group col-sm-12 col-md-3">
          <label for="desde">Desde</label>
          <input type="month" class="form-control" id="desde" name="desde" value="{{date('Y-m', strtotime($colaborador->desde.'-01'))}}" readonly>
        </div>
      </div>
      <div class="form-group">
        <label for="foto">Foto</label>
        <br>
        <div class="avatar avatar-xxl" data-toggle="tooltip" data-placement="top" title="{{$colaborador->nome}}">
          <img src="data:image/jpeg;base64, {{base64_encode($colaborador->foto)}}" alt="Avatar" class="avatar-img rounded-circle">
        </div>
      </div>
      <br>
      <div class="form-group text-right">
        <a href="/painel/colaboradores" class="btn btn-secondary">Voltar</a>
        <a href="/painel/colaboradores/alterar?id={{$colaborador->id_colaborador}}" class="btn btn-primary">Alterar</a>
      </div>
    </div>
  </div>
</div>
@endforeach
@stop