@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">Prestação de contas</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item active" aria-current="page">Prestação de contas</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- OUR ARTICLES -->
<div class="">
	<div class="content-wrap">
		<div class="container">

			<div class="row mt-4">

				@foreach($prestacoes as $prestacao)
				<div class="col-sm-12 col-md-6 col-lg-4 mb-5">
					<div class="rs-news-1">
						<div class="media-box">
							<a href="/prestacao-de-contas/post?id={{$prestacao->id_prestacao}}"><img src="/template_site/images/prestacao-de-contas.png" alt="" class="img-fluid"></a>
						</div>
						<div class="body-box">
							<div class="title">
								<a href="/prestacao-de-contas/post?id={{$prestacao->id_prestacao}}">{{$prestacao->titulo}}</a>
							</div>
							<div class="meta-date">{{date('m/Y', strtotime($prestacao->data))}}</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					{{$prestacoes->links('vendor.pagination.bootstrap-4')}}
				</div>
			</div>
		</div>
	</div>
</div>

<!-- CTA -->
<div class="section" style="background-color: #3f4095;">
	<div class="content-wrap py-5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-12">
					<div class="cta-1">
						<div class="body-text mb-3">
							<h3 class="my-1" style="color: #FD4D40;">Deseja falar conosco?</h3>
							<p class="uk18 mb-0 text-white">Clique no botão "Fale conosco" para ir até o formulário de contato.</p>
						</div>
						<div class="body-action">
							<a href="/fale-conosco" class="btn btn-primary mt-3">FALE CONOSCO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop