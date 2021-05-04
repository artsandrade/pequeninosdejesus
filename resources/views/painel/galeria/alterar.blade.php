@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Galeria</li>
        <li class="breadcrumb-item active" aria-current="page">Alterar</li>
    </ol>
</nav>
<h1 class="m-0">Alterar</h1>
@stop
@foreach($albuns as $album)
@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form method="POST" action="javascript:void(0)" id="form-alterar">
                @csrf
                <input type="hidden" name="url_form" id="url_form" value="{{route('galeria_alterar')}}">
                <input type="hidden" name="id_album" id="id_album" value="{{$album->id_album}}">
                <div class="form-group">
                    <label for="nome">Nome do álbum</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$album->nome}}" placeholder="Insira o nome do álbum...">
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="imagem">Insira as imagens</label>
                        <input id="imagem" name="imagem[]" type="file" class="file" accept=".jpeg, .jpg, .gif, .png, .JPEG, .JPG, .GIF, .PNG" multiple>
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/galeria" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary" id="btn-alterar">Alterar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row card-group-row  pt-2">
        @foreach($imagens as $imagem)
        <div class="col-md-6 col-lg-4 card-group-row__col">
            <div class="card-body d-flex flex-column">
                <div class="text-center">
                    <img src="/template_site/images/galeria/{{$imagem->imagem}}" style="min-height: 300px; max-height: 300px; min-width: 300px; max-width: 300px" alt="" class="card-img">
                    <br>
                    <br>
                    <a href="#" class="btn btn-danger btn-lg btn-block" onclick="modalRemoverImagem('{{$imagem->id_imagem}}', '{{$imagem->imagem}}', '{{$imagem->album_id}}')"><i class="material-icons">delete</i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="/public/template_painel/functionsJs/galeria.js" defer></script>
@stop
@endforeach
@section('footer_layout')

<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-center-title">Remover imagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="modal-texto">Você tem certeza que deseja remover a imagem selecionada?</p>
            </div>
            <div class="modal-footer">
                @csrf
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" id="modal-botao" class="btn btn-danger">Remover</button>
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