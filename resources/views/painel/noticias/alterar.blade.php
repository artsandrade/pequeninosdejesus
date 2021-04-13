@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Notícias</li>
        <li class="breadcrumb-item active" aria-current="page">Alterar</li>
    </ol>
</nav>
<h1 class="m-0">Alterar</h1>
@stop

@section('conteudo')
@foreach($noticias as $noticia)
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form action="javascript:void(0)" method="POST" id="form-alterar" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="url_form" id="url_form" value="{{route('noticias_alterar')}}">
                <input type="hidden" id="id_noticia" name="id_noticia" value="{{$noticia->id_noticia}}">
                <div class="row">
                    <div class="form-group col-sm-10">
                        <label for="titulo">Título da notícia</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticia->titulo}}">
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="situacao">Situação</label>
                        <select class="form-control" name="situacao" id="situacao">
                            <option value="0" {{$noticia->situacao=='0'?'selected':''}}>Oculto</option>
                            <option value="1" {{$noticia->situacao=='1'?'selected':''}}>Publicado</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="img_capa">Capa da notícia</label>
                    <input type="file" class="form-control-file" accept=".jpeg, .jpg, .gif, .png" id="capa" id="capa" name="capa">
                    <br>
                    <div class="col-sm-12 col-md-4">
                        <img src="data:image/jpeg;base64, {{base64_encode( $noticia->capa )}}" alt="" class="card-img">
                    </div>
                </div>
                <div style="height: 400px;" id="editor-container"></div>

                <input type="hidden" id="noticia" name="noticia" value="">
                <br>
                <div class="form-group text-right">
                    <a href="/painel/noticias" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary" id="btn-alterar">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<script src="/public/template_painel/functionsJs/noticias.js" defer></script>
<script src="/public/template_painel/functionsJs/quill.js" defer></script>

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


@stop