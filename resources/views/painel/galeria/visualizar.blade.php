@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Galeria</li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop
@section('conteudo')
@foreach($albuns as $album)
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <div class="form-group">
                <label for="album">Nome do álbum</label>
                <input type="text" class="form-control" id="album" name="album" value="{{$album->nome}}" readonly>
            </div>
            <div class="row card-group-row  pt-2">
                @foreach($imagens as $imagem)
                <div class="col-md-6 col-lg-4 card-group-row__col">
                    <div class="card-body d-flex flex-column">
                        <div class="text-center">
                            <img src="/template_site/images/galeria/{{$imagem->imagem}}" alt="" class="card-img">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            <div class="form-group text-right">
                <a href="/painel/galeria" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@stop