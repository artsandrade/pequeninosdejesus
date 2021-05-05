@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">Notícias</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item active" aria-current="page">Notícias</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- OUR NEWS -->
<div class="section">
	<div class="content-wrap">
		<div class="container">

			<div class="row">

				<!-- Item 1 -->
				@foreach($noticias as $noticia)
				<div class="col-sm-12 col-md-6 col-lg-4 mb-5">
					<div class="rs-news-1">
						<div class="media-box">
							<a href="/noticias/post?id={{$noticia->id_noticia}}"><img src="data:image/jpeg;base64, {{base64_encode( $noticia->capa )}}" style="min-height: 400px; max-height: 400px; min-width: 400px; max-width: 400px" alt="" class="img-fluid"></a>
						</div>
						<div class="body-box">
							<div class="title">
								<a href="/noticias/post?id={{$noticia->id_noticia}}">{{$noticia->titulo}}</a>
							</div>
							<div class="meta-date">{{date('d/m/Y', strtotime($noticia->dt_criacao))}}</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-12">
					{{$noticias->links('vendor.pagination.bootstrap-4')}}
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