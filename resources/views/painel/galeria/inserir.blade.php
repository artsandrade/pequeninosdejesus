@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Galeria</li>
        <li class="breadcrumb-item active" aria-current="page">Inserir</li>
    </ol>
</nav>
<h1 class="m-0">Inserir</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form id="form-inserir" method="POST" action="javascript:void(0)" enctype="multipart/form-data" accept-charset="UTF-8">
                @csrf
                <input type="hidden" name="url_form" id="url_form" value="{{route('galeria_inserir')}}">
                <div class="form-group">
                    <label for="nome">Nome do álbum</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do álbum...">
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
                    <button type="submit" class="btn btn-primary" id="btn-inserir">Inserir</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/public/template_painel/functionsJs/galeria.js" defer></script>
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