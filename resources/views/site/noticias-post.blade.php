@extends('site/layout')

@section('conteudo')


<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">Inauguração da quadra</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item"><a href="/noticias">Notícias</a></li>
					<li class="breadcrumb-item active" aria-current="page">Inauguração da quadra</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- CONTENT -->
<div id="class" class="">
	<div class="content-wrap">
		<div class="container">

			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-9">
					
					@foreach($noticias as $noticia)
					<div class="single-news">
						<div class="media">
							<img src="data:image/jpeg;base64, {{base64_encode( $noticia->capa )}}" alt="" class="rounded img-fluid">
						</div>
						<h2 class="title">{{$noticia->titulo}}</h2>
						<div class="meta-date">{{date('d/m/Y', strtotime($noticia->dt_criacao))}}</div>

						{!! $noticia->noticia !!}
					</div>
					@endforeach
					<!-- end single blog -->

					<div class="author-box">
						<h4>Compartilhe essa notícia nas redes sociais</h4>
						<div class="sosmed-icon d-inline-flex">
							<a href="#" class="fb" title="Facebook"><i class="fa fa-facebook"></i></a>
						</div>
						<div class="sosmed-icon d-inline-flex">
							<a href="#" class="tw" title="Twitter"><i class="fa fa-twitter"></i></a>
						</div>
						<div class="sosmed-icon d-inline-flex">
							<a href="#" class="wpp" title="WhatsApp"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<!-- end author box -->

				</div>

				<div class="col-sm-12 col-md-12 col-lg-3">

					<div class="widget-title">
						Últimas notícias
					</div>
					<div class="rs-news-1">
						<div class="media-box">
							<a href="/noticias/post"><img src="/template_site/images/quadra/img2.png" alt="" class="img-fluid"></a>
						</div>
						<div class="body-box">
							<div class="title">
								<a href="/noticias/post">Inauguração da quadra</a>
							</div>
							<div class="meta-date">01 de janeiro de 2021</div>
							<p>Na manhã do dia 01/02/2021, juntamente com as autoridades locais, foi inaugurada a quadra poliesportiva do instituto...</p>
						</div>
					</div>

				</div>
				<!-- end sidebar -->

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