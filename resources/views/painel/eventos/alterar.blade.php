@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Eventos</li>
        <li class="breadcrumb-item active" aria-current="page">Alterar</li>
    </ol>
</nav>
<h1 class="m-0">Alterar</h1>
@stop

@section('conteudo')
@foreach($eventos as $evento)
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form action="javascript:void(0)" method="POST" id="form-alterar-evento">
            @csrf
            <input type="hidden" name="url_form" id="url_form" value="{{route('eventos_alterar')}}">
            <input type="hidden" name="id_evento" id="id_evento" value="{{$evento->id_evento}}">
                <div class="row">
                    <div class="form-group col-sm-8">
                        <label for="nome">Título</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{$evento->nome}}">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="data">Data/hora</label>
                        <input type="datetime-local" class="form-control" id="data" name="data" value="{{date('Y-m-d\TH:i', strtotime($evento->data))}}">
                    </div>
                    <div class="form-group col-sm-1">
                        <label for="cor">Cor</label>
                        <input type="color" class="form-control" id="cor" name="cor" value="{{$evento->cor}}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-10">
                        <label for="local">Local</label>
                        <input type="text" class="form-control" id="local" name="local" value="{{$evento->local}}">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="situacao">Situação</label>
                        <select class="form-control" name="situacao" id="situacao">
                        <option value="0" {{$evento->situacao==0?'selected':''}}>Cancelado</option>
                        <option value="1" {{$evento->situacao==1?'selected':''}}>Disponível</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/eventos" class="btn btn-secondary">Voltar</a>
                    <button type="button" class="btn btn-primary" id="btn-alterar">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/public/template_painel/functionsJs/eventos.js" defer></script>
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