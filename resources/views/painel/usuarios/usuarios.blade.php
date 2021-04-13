@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Usuários</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name", "js-lists-values-login", "js-lists-values-status"]'>

                <div class="search-form search-form--light m-3">
                    <input type="text" class="form-control search" placeholder="Pesquisar">
                    <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                </div>

                <table class="table mb-0 thead-border-top-0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th style="width: 85px;"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="staff02">
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>
                                <span class="js-lists-values-employee-name">{{$usuario->nome}}</span>
                            </td>
                            <td>
                                <span class="js-lists-values-login">{{$usuario->email}}</span>
                            </td>
                            @if($usuario->situacao==1)
                            <td><span class="badge badge-success js-lists-values-status">LIBERADO</span></td>
                            @else
                            <td><span class="badge badge-danger js-lists-values-status">BLOQUEADO</span></td>
                            @endif
                            <td>
                                <a href="/painel/usuarios/alterar?id={{$usuario->id_usuario}}" class="text-muted" title="Alterar"><i class="material-icons">create</i></a>
                                <a href="#" class="text-muted" onclick="remover('{{$usuario->nome}}','{{$usuario->id_usuario}}')" title="Remover"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_layout')

<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-center-title">Remover usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="modal-texto"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger" id="modal-botao">Remover</button>
            </div>
        </div>
    </div>
</div>

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