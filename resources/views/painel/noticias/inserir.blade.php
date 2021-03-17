@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Notícias</li>
        <li class="breadcrumb-item active" aria-current="page">Inserir</li>
    </ol>
</nav>
<h1 class="m-0">Inserir</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form>
                <div class="form-group">
                    <label for="titulo">Título da notícia</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o título da notícia...">
                </div>
                <div class="form-group">
                    <label for="img_capa">Capa da notícia</label>
                    <input type="file" class="form-control-file" accept=".jpeg, .jpg, .gif, .png" id="img_capa" name="img_capa">
                </div>
                <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Digite aqui a notícia" data-quill-modules-toolbar='[["bold", "italic"], ["link", "blockquote", "code", "image"], [{"list": "ordered"}, {"list": "bullet"}]]'>
                </div>
                <br>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop