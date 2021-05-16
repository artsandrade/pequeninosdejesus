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
            <form action="javascript:void(0)" method="POST" id="form-alterar-senha"  enctype="multipart/form-data">
                @CSRF
                <input type="hidden" name="id_usuario" value="{{session('usuario_id')}}">
                <input type="hidden" name="url_form" id="url_form" value="{{route('perfil_alterar_senha')}}">

                <div class="avatar avatar-xxl" data-toggle="tooltip" data-placement="top" title="{{session('usuario_nome')}}">
                    <img src="data:image/jpeg;base64, {{base64_encode( session('usuario_avatar') )}}" alt="Avatar" class="avatar-img rounded-circle">
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
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control-file" accept=".jpeg, .jpg, .gif, .png" id="avatar" name="avatar">
                </div>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-12">
                        <label for=""><b>Alterar senha</b></label>
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="senha">Senha antiga</label>
                        <input type="password" class="form-control" id="senha" name="senha_antiga" placeholder="Insira a senha antiga senha...">
                    </div>
                    <div class="form-group col-sm-12 col-md-4">
                        <label for="senha">Nova senha</label>
                        <input type="password" class="form-control" id="senha" name="senha_nova" placeholder="Insira a nova senha...">
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary" id="btn-alterar">Alterar perfil</button>
                </div>
            </form>
        </div>
    </div>
</div>
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

<script src="/public/template_painel/functionsJs/login.js" defer></script>
@stop