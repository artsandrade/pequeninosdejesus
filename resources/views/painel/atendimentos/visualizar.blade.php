@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Atendimentos</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name", "js-lists-values-status"]'>

                <div class="search-form search-form--light m-3">
                    <input type="text" class="form-control search" placeholder="Pesquisar">
                    <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                </div>

                <table class="table mb-0 thead-border-top-0">
                    <thead>
                        <tr>
                            <th>Solicitante</th>
                            <th style="width: 37px;">Situação</th>
                            <th style="width: 130px;">Data solicitação</th>
                            <th style="width: 24px;"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="staff02">
                        <tr>
                            <td>
                                <span class="js-lists-values-employee-name">Michael Smith</span>
                            </td>
                            <td><span class="badge badge-warning js-lists-values-status">EM ANDAMENTO</span></td>
                            <td><small class="text-muted">20/01/2021</small></td>
                            <td><a href="#" class="text-muted" title="Alterar" data-toggle="modal" data-target="#modal-center"><i class="material-icons">create</i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="js-lists-values-employee-name">Michael Smith</span>
                            </td>
                            <td><span class="badge badge-success js-lists-values-status">CONCLUÍDO</span></td>
                            <td><small class="text-muted">20/01/2021</small></td>
                            <td><a href="#" class="text-muted" title="Alterar" data-toggle="modal" data-target="#modal-center"><i class="material-icons">create</i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function buscarAtendimento(id) {

    }
</script>
@stop

@section('footer_layout')

<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-center-title">Atualizar atendimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 card-body">
                    <form>
                        <input type="hidden" name="id_atendimento" value="">
                        <div class="form-group">
                            <label for="album">Nome</label>
                            <input type="text" class="form-control" id="album" name="album" disabled>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-9">
                                <label for="album">Nome do aluno</label>
                                <input type="text" class="form-control" id="album" name="album" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="album">CPF do aluno</label>
                                <input type="text" class="form-control" id="album" name="album" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="album">E-mail</label>
                                <input type="text" class="form-control" id="album" name="album" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="album">Telefone</label>
                                <input type="text" class="form-control" id="album" name="album" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="album">Celular</label>
                                <input type="text" class="form-control" id="album" name="album" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="album">Assunto</label>
                                <input type="text" class="form-control" id="album" name="album" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="situacao">Situação</label>
                                <select class="form-control" name="situacao" id="situacao">
                                    <option value="">Concluído</option>
                                    <option value="">Em andamento</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="album">Situação</label>
                            <textarea class="form-control" name="" id="" cols="1" rows="3" disabled></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </div>
    </div>
</div>

@stop