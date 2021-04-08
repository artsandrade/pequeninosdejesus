@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Meu perfil</li>
    </ol>
</nav>
<h1 class="m-0">Meu perfil</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form>
                <div class="avatar avatar-xxl" data-toggle="tooltip" data-placement="top" title="{{session('usuario_nome')}}">
                    <img src="{{session('usuario_avatar')}}" alt="Avatar" class="avatar-img rounded-circle">
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-10">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{session('usuario_nome')}}" disabled>
                    </div>
                    <div class="form-group col-sm-12 col-md-2">
                        <label for="tipo_usuario">Tipo do usuário</label>
                        <select class="form-control" name="tipo_usuario" id="tipo_usuario" disabled>
                            <option value="">Administrador</option>
                            <option value="">Comum</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{session('usuario_email')}}" disabled>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-12">
                        <label for=""><b>Alterar senha</b></label>
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="senha">Senha antiga</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira a senha antiga senha...">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="senha">Nova senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira a nova senha...">
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Alterar senha</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop