@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#">Início</a></li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
    </ol>
</nav>
<h1 class="m-0">Painel</h1>
@stop

@section('conteudo')
<div class="row card-group-row">
    <div class="col-lg-4 col-md-6 card-group-row__col">
        <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
            <div class="flex">
                <div class="card-header__title text-muted mb-2">Atendimentos</div>
                <div class="text-amount">27</div>
            </div>
            <div><i class="icon-muted icon-40pt fas fa-phone ml-3"></i></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 card-group-row__col">
        <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
            <div class="flex">
                <div class="card-header__title text-muted mb-2">Notícias</div>
                <div class="text-amount">10</div>
            </div>
            <div><i class="icon-muted icon-40pt fas fa-newspaper ml-3"></i></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 card-group-row__col">
        <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
            <div class="flex">
                <div class="card-header__title text-muted mb-2">Prestação de contas</div>
                <div class="text-amount">360</div>
            </div>
            <div><i class="icon-muted icon-40pt fas fa-hand-holding-usd ml-3"></i></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header card-header-large bg-white d-flex align-items-center">
                <h4 class="card-header__title flex m-0">Atendimentos recentes</h4>
            </div>
            <div class="list-group tab-content list-group-flush">
                <div class="tab-pane active show fade" id="activity_all">


                    <div class="list-group-item list-group-item-action d-flex align-items-center ">
                        <div class="flex">
                            <div class="d-flex align-items-middle">
                                <strong class="text-15pt mr-1">Fulano de tal (Assunto: Solicitação de documentos)</strong>
                            </div>
                            <small class="text-muted">11/03/2021</small>
                        </div>
                        <div><span class="badge badge-warning">EM ANDAMENTO</span></div>
                    </div>

                    <div class="list-group-item list-group-item-action d-flex align-items-center ">
                        <div class="flex">
                            <div class="d-flex align-items-middle">
                                <strong class="text-15pt mr-1">Fulano de tal (Assunto: Solicitação de documentos)</strong>
                            </div>
                            <small class="text-muted">11/03/2021</small>
                        </div>
                        <div><span class="badge badge-warning">EM ANDAMENTO</span></div>
                    </div>

                    <div class="list-group-item list-group-item-action d-flex align-items-center ">
                        <div class="flex">
                            <div class="d-flex align-items-middle">
                                <strong class="text-15pt mr-1">Fulano de tal (Assunto: Solicitação de documentos)</strong>
                            </div>
                            <small class="text-muted">11/03/2021</small>
                        </div>
                        <div><span class="badge badge-warning">EM ANDAMENTO</span></div>
                    </div>

                    <div class="list-group-item list-group-item-action d-flex align-items-center ">
                        <div class="flex">
                            <div class="d-flex align-items-middle">
                                <strong class="text-15pt mr-1">Fulano de tal (Assunto: Solicitação de documentos)</strong>
                            </div>
                            <small class="text-muted">11/03/2021</small>
                        </div>
                        <div><span class="badge badge-warning">EM ANDAMENTO</span></div>
                    </div>

                    <div class="card-footer text-center border-0">
                        <a class="text-muted" href="/painel/atendimentos">Ver todos (15)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop