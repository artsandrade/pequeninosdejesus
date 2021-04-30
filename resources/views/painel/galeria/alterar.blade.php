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

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form>
                <div class="form-group">
                    <label for="album">Nome do álbum</label>
                    <input type="text" class="form-control" id="album" name="album" placeholder="Insira o nome do álbum...">
                </div>
                <div class="dropzone dropzone-multiple w-100" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://" data-dropzone-files='["/template_site/images/galeria/30_04_2021_14_39_250.jpg", "/template_painel/images/avatar/demi.png", "/template_painel/images/avatar/green.svg"]'>

                    <div class="fallback">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileUploadMultiple" multiple>
                            <label class="custom-file-label" for="customFileUploadMultiple">Escolher</label>
                        </div>
                    </div>

                    <ul class="dz-preview dz-preview-multiple list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar">
                                        <img src="/template_painel/images/avatar/blue.svg" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="font-weight-bold" data-dz-name>...</div>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-muted-light" data-dz-remove>
                                        <i class="material-icons">close</i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/galeria" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop