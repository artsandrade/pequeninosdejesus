@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Galeria</li>
    </ol>
</nav>
<h1 class="m-0">Galeria</h1>
@stop

@section('conteudo')
<div class="row card-group-row  pt-2">
    @foreach($galerias as $galeria)
    <div class="col-md-6 col-lg-4 card-group-row__col">
        <div class="card card-group-row__card pricing__card">

            <div class="card-body d-flex flex-column">
                <div class="text-center">
                    <img src="/template_site/images/galeria/{{$galeria->capa}}" style="min-height: 300px; max-height: 300px; min-width: 300px; max-width: 300px" alt="" class="card-img">
                    <h4 class="pricing__title mt-1 mb-0">{{$galeria->nome}}</h4>
                </div>
                <div class="card-body mt-0 mb-0 pb-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/painel/galeria/alterar?id={{$galeria->id_album}}" class="btn btn-primary"><i class="material-icons">create</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/painel/galeria/visualizar?id={{$galeria->id_album}}" class="btn btn-secondary"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-danger" onclick="modalRemover('{{$galeria->nome}}', '{{$galeria->id_album}}')"><i class="material-icons">delete</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script src="/public/template_painel/functionsJs/galeria.js" defer></script>
@stop

@section('footer_layout')
<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-center-title">Remover álbum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="modal-texto"></p>
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