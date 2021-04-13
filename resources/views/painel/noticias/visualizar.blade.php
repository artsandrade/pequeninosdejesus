@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Notícias</li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
@foreach($noticias as $noticia)
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <div class="row">
                <div class="form-group col-sm-10">
                    <label for="titulo">Título da notícia</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticia->titulo}}" readonly>
                </div>
                <div class="form-group col-sm-2">
                    <label for="situacao">Situação</label>
                    <input type="text" class="form-control" id="situacao" name="situacao" value="{{$noticia->situacao=='1'?'Publicado':'Oculto'}}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="img_capa">Capa da notícia</label>
                <div class="col-sm-12 col-md-4">
                    <img src="data:image/jpeg;base64, {{base64_encode( $noticia->capa )}}" alt="" class="card-img">
                </div>
            </div>
            <div class="form-group">
                <label for="img_capa">Conteúdo</label>
                <br>
                <div>
                    {!!$noticia->noticia!!}
                </div>
            </div>
            <br>
            <div class="form-group text-right">
                <a href="/painel/noticias" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@stop