@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Eventos</li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>
                <div class="form-group col-sm-3">
                    <label for="data">Data/hora</label>
                    <input type="datetime-local" class="form-control" id="data" name="data">
                </div>
                <div class="form-group col-sm-1">
                    <label for="colaboradores">Cor</label>
                    <input type="color" class="form-control" id="colaboradores" name="cor">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-10">
                    <label for="local">Local</label>
                    <input type="text" class="form-control" id="local" name="plocal">
                </div>
                <div class="form-group col-sm-2">
                    <label for="situacao">Situação</label>
                    <select class="form-control" name="situacao" id="situacao">
                        <option value="0">Cancelado</option>
                        <option value="1">Disponível</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group text-right">
                <a href="/painel/eventos" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@stop