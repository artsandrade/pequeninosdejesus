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
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form>
                <div class="form-group">
                    <label for="album">Nome do álbum</label>
                    <input type="text" class="form-control" id="album" name="album" value="Nome do álbum" readonly>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/galeria" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop