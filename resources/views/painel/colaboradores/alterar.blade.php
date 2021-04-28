@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="/painel">Início</a></li>
    <li class="breadcrumb-item" aria-current="page">Colaboradores</li>
    <li class="breadcrumb-item active" aria-current="page">Alterar</li>
  </ol>
</nav>
<h1 class="m-0">Alterar</h1>
@stop

@section('conteudo')
@foreach($colaboradores as $colaborador)
<div class="card card-form">
  <div class="row no-gutters">
    <div class="col-lg-12 card-body">
      <form id="form-alterar" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="url_form" id="url_form" value="{{route('colaborador_alterar')}}">
        <input type="hidden" name="id_colaborador" id="id_colaborador" value="{{$colaborador->id_colaborador}}">
        <div class="row">
          <div class="form-group col-sm-12 col-md-10">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do colaborador..." value="{{$colaborador->nome}}">
          </div>
          <div class="form-group col-sm-12 col-md-2">
            <label for="situacao">Situação</label>
            <select class="form-control" name="situacao" id="situacao">
              <option value="1" {{$colaborador->situacao==1?'selected':''}}>Ativo</option>
              <option value="0" {{$colaborador->situacao==0?'selected':''}}>Desligado</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-12 col-md-7">
            <label for="funcao">Função</label>
            <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Insira a função do colaborador..." value="{{$colaborador->funcao}}">
          </div>
          <div class="form-group col-sm-12 col-md-3">
            <label for="desde">Desde</label>
            <input type="month" class="form-control" id="desde" name="desde" value="{{date('Y-m', strtotime($colaborador->desde.'-01'))}}">
          </div>
        </div>
        <div class="form-group">
          <label for="foto">Foto</label>
          <br>
          <div class="avatar avatar-xxl" data-toggle="tooltip" data-placement="top" title="{{$colaborador->nome}}">
            <img src="data:image/jpeg;base64, {{base64_encode($colaborador->foto)}}" alt="Avatar" class="avatar-img rounded-circle">
          </div>
          <input type="file" class="form-control-file" accept=".jpeg, .jpg, .gif, .png" id="foto" name="foto">
        </div>
        <br>
        <div class="form-group text-right">
          <a href="/painel/colaboradores" class="btn btn-secondary">Voltar</a>
          <button type="submit" class="btn btn-primary" id="btn-alterar">Alterar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
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