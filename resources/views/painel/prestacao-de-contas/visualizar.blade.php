@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Prestação de contas</li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-9">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o título" disabled>
                    </div>
                    <div class="form-group col-sm-12 col-md-3">
                        <label for="mes_ano">Mês/Ano</label>
                        <input type="month" class="form-control" name="mes_ano" id="mes_ano" disabled>
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/prestacao-de-contas" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop