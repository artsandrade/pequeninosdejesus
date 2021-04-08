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
            <form>
                <div class="row">
                    <div class="form-group col-sm-3">
                        <label for="alunos_matriculados">Alunos matriculados</label>
                        <input type="number" class="form-control" id="alunos_matriculados" name="parametro[alunos_matriculados]" min="0">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="alunos_antigos">Alunos que já estudaram</label>
                        <input type="number" class="form-control" id="alunos_antigos" name="parametro[alunos_antigos]" min="0">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="colaboradores">Colaboradores</label>
                        <input type="number" class="form-control" id="colaboradores" name="parametro[colaboradores]" min="0">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="salas_de_aula">Salas de aula</label>
                        <input type="number" class="form-control" id="salas_de_aula" name="parametro[salas_de_aula]" min="0">
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop