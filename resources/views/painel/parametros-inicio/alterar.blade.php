@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Parâmetros início</li>
        <li class="breadcrumb-item active" aria-current="page">Alterar</li>
    </ol>
</nav>
<h1 class="m-0">Alterar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form id="form-alterar" action="javascript:void(0)" method="POST">
                @csrf
                <input type="hidden" name="url_form" id="url_form" value="{{route('parametros_alterar')}}">
                <div class="row">
                    @foreach($parametros_inicio as $parametro)
                    @if($parametro->id_parametro==1)
                    <div class="form-group col-sm-3">
                        <label for="alunos_matriculados">Alunos matriculados</label>
                        <input type="number" class="form-control" id="alunos_matriculados" name="parametro[alunos_matriculados]" value="{{$parametro->numero}}" step="1" min="0">
                    </div>
                    @endif
                    @endforeach
                    @foreach($parametros_inicio as $parametro)
                    @if($parametro->id_parametro==2)
                    <div class="form-group col-sm-3">
                        <label for="alunos_antigos">Alunos que já estudaram</label>
                        <input type="number" class="form-control" id="alunos_antigos" name="parametro[alunos_antigos]" value="{{$parametro->numero}}" step="1" min="0">
                    </div>
                    @endif
                    @endforeach
                    @foreach($parametros_inicio as $parametro)
                    @if($parametro->id_parametro==3)
                    <div class="form-group col-sm-3">
                        <label for="colaboradores">Colaboradores</label>
                        <input type="number" class="form-control" id="colaboradores" name="parametro[colaboradores]" value="{{$parametro->numero}}" step="1" min="0">
                    </div>
                    @endif
                    @endforeach
                    @foreach($parametros_inicio as $parametro)
                    @if($parametro->id_parametro==4)
                    <div class="form-group col-sm-3">
                        <label for="salas_de_aula">Salas de aula</label>
                        <input type="number" class="form-control" id="salas_de_aula" name="parametro[salas_de_aula]" value="{{$parametro->numero}}" step="1" min="0">
                    </div>
                    @endif
                    @endforeach
                </div>
                <br>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary" id="btn-alterar">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/public/template_painel/functionsJs/parametros_inicio.js" defer></script>
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