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
            <table class="table table-striped table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Solicitante</th>
                        <th style="width: 37px;">Situação</th>
                        <th style="width: 130px;">Data solicitação</th>
                        <th style="width: 24px;"></th>
                    </tr>
                </thead>
                <tbody class="list" id="staff02">
                    @foreach($atendimentos as $atendimento)
                    <tr>
                        <td>
                            <span class="js-lists-values-employee-name">{{$atendimento->nome}}</span>
                        </td>
                        @if($atendimento->situacao=='1')
                        <td><span class="badge badge-success js-lists-values-status">CONCLUÍDO</span></td>
                        @elseif($atendimento->situacao=='2')
                        <td><span class="badge badge-warning js-lists-values-status">EM ANDAMENTO</span></td>
                        @else
                        <td><span class="badge badge-danger js-lists-values-status">PENDENTE</span></td>
                        @endif
                        <td><small class="text-muted">{{date('d/m/Y', strtotime($atendimento->dt_criacao))}}</small></td>
                        <td><a href="#" class="text-muted" title="Alterar" onclick="visualizaAtendimento('{{$atendimento->id_atendimento}}', '{{$atendimento->nome}}', '{{$atendimento->nome_aluno}}', '{{$atendimento->cpf_aluno}}', '{{$atendimento->email}}', '{{$atendimento->telefone}}', '{{$atendimento->celular}}', '{{$atendimento->assunto}}', '{{$atendimento->mensagem}}', '{{$atendimento->situacao}}')"><i class="material-icons">create</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/public/template_painel/functionsJs/atendimentos.js" defer></script>
<script src="/public/template_painel/functionsJs/datatables.js" defer></script>

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
                    <form action="javascript:void(0)" method="POST" id="form-atendimento">
                        @csrf
                        <input type="hidden" id="id_atendimento" name="id_atendimento" value="">
                        <input type="hidden" id="url_form" name="url_form" value="{{route('atendimentos_alterar')}}">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="" disabled>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-9">
                                <label for="nome_aluno">Nome do aluno</label>
                                <input type="text" class="form-control" id="nome_aluno" name="nome_aluno" value="" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="cpf_aluno">CPF do aluno</label>
                                <input type="text" class="form-control" id="cpf_aluno" name="cpf_aluno" value="" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email" value="" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" value="" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="assunto">Assunto</label>
                                <input type="text" class="form-control" id="assunto" name="assunto" value="" disabled>
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="situacao">Situação</label>
                                <select class="form-control" name="situacao" id="situacao">
                                    <option value="1">Concluído</option>
                                    <option value="2">Em andamento</option>
                                    <option value="3">Pendente</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea class="form-control" name="mensagem" id="mensagem" cols="1" rows="3" disabled></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" id="btn-alterar" class="btn btn-primary">Alterar</button>
            </div>
        </div>
    </div>
</div>

@stop