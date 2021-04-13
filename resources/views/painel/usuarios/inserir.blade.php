@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Usuários</li>
        <li class="breadcrumb-item active" aria-current="page">Inserir</li>
    </ol>
</nav>
<h1 class="m-0">Inserir</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form id="form-inserir" action="javascript:void(0)" method="POST">
                <div class="row">
                    <div class="form-group col-sm-12 col-md-10">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do usuário...">
                    </div>
                    <div class="form-group col-sm-12 col-md-2">
                        <label for="tipo_usuario">Tipo do usuário</label>
                        <select class="form-control" name="tipo_usuario" id="tipo_usuario">
                            <option value="1">Administrador</option>
                            <option value="2">Comum</option>
                            <option value="3">Financeiro</option>
                            <option value="4">Secretaria</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Insira o e-mail...">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira a senha...">
                    </div>
                    <div class="form-group col-sm-12 col-md-2">
                        <label for="situacao">Situação</label>
                        <select class="form-control" name="situacao" id="situacao">
                            <option value="0">Bloqueado</option>
                            <option value="1">Liberado</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["/template_painel/images/account-add-photo.svg"]'>
                        <div class="dz-preview dz-file-preview dz-clickable mr-3">
                            <div class="avatar" style="width: 80px; height: 80px;">
                                <img src="/template_painel/images/account-add-photo.svg" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                            </div>
                        </div>
                        <div class="media-body">
                            <button class="btn btn-sm btn-primary dz-clickable">Escolher foto</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/usuarios" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop