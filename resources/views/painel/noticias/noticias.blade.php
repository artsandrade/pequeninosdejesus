@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Notícias</li>
    </ol>
</nav>
<h1 class="m-0">Notícias</h1>
@stop

@section('conteudo')
<div class="row card-group-row  pt-2">
    <div class="col-md-6 col-lg-4 card-group-row__col">
        <div class="card card-group-row__card pricing__card">

            <div class="card-body d-flex flex-column">
                <div class="text-center">
                    <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    <h4 class="pricing__title mt-1 mb-0">Nome álbum</h4>
                    <h6>Publicado em: <em>22/01/2021</em></h6>
                </div>
                <div class="card-body mt-0 mb-0 pb-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/painel/noticias/alterar?id=" class="btn btn-primary"><i class="material-icons">create</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/painel/noticias/visualizar?id=" class="btn btn-secondary"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-center"><i class="material-icons">delete</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 card-group-row__col">
        <div class="card card-group-row__card pricing__card">

            <div class="card-body d-flex flex-column">
                <div class="text-center">
                    <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    <h4 class="pricing__title mt-1 mb-0">Nome álbum</h4>
                    <h6>Publicado em: <em>22/01/2021</em></h6>
                </div>
                <div class="card-body mt-0 mb-0 pb-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/painel/noticias/alterar?id=" class="btn btn-primary"><i class="material-icons">create</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/painel/noticias/visualizar?id=" class="btn btn-secondary"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-center"><i class="material-icons">delete</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 card-group-row__col">
        <div class="card card-group-row__card pricing__card">

            <div class="card-body d-flex flex-column">
                <div class="text-center">
                    <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    <h4 class="pricing__title mt-1 mb-0">Nome álbum</h4>
                    <h6>Publicado em: <em>22/01/2021</em></h6>
                </div>
                <div class="card-body mt-0 mb-0 pb-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/painel/noticias/alterar?id=" class="btn btn-primary"><i class="material-icons">create</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/painel/noticias/visualizar?id=" class="btn btn-secondary"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-center"><i class="material-icons">delete</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 card-group-row__col">
        <div class="card card-group-row__card pricing__card">

            <div class="card-body d-flex flex-column">
                <div class="text-center">
                    <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    <h4 class="pricing__title mt-1 mb-0">Nome álbum</h4>
                    <h6>Publicado em: <em>22/01/2021</em></h6>
                </div>
                <div class="card-body mt-0 mb-0 pb-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="/painel/noticias/alterar?id=" class="btn btn-primary"><i class="material-icons">create</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/painel/noticias/visualizar?id=" class="btn btn-secondary"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-center"><i class="material-icons">delete</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_layout')

<div id="modal-center" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-center-title" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-center-title">Remover notícia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você tem certeza que deseja remover a notícia <b>Nome da notícia</b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger">Remover</button>
            </div>
        </div>
    </div>
</div>

@stop