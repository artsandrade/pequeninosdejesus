@extends('site/layout')

@section('conteudo')

@foreach($noticias as $noticia)

@section('meta')
<meta property="og:url" content="http://{{$_SERVER['HTTP_HOST']}}/noticias/post?id={{$noticia->id_noticia}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Pequeninos de Jesus" />
<meta property="og:description" content="{{$noticia->titulo}}" />
<meta property="og:image" content="http://{{$_SERVER['HTTP_HOST']}}/template_site/images/noticias/{{$noticia->capa_caminho}}" />
@stop
<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">{{$noticia->titulo}}</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item"><a href="/noticias">Notícias</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$noticia->titulo}}</li>
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

					<div class="single-news">
						<div class="media">
							<img src="data:image/jpeg;base64, {{base64_encode( $noticia->capa )}}" alt="" class="rounded img-fluid">
						</div>
						<h2 class="title">{{$noticia->titulo}}</h2>
						<div class="meta-date">{{date('d/m/Y', strtotime($noticia->dt_criacao))}}</div>

						{!! $noticia->noticia !!}
					</div>
					<!-- end single blog -->

					<div class="author-box">
						<h4>Compartilhe essa notícia nas redes sociais</h4>
						<div class="sosmed-icon d-inline-flex">
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://{{$_SERVER['HTTP_HOST']}}/noticias/post?id={{$noticia->id_noticia}};src=sdkpreparse" class="fb" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						</div>
						<div class="fb-share-button" data-href="http://{{$_SERVER['HTTP_HOST']}}/noticias/post?id={{$noticia->id_noticia}}" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://{{$_SERVER['HTTP_HOST']}}/noticias/post?id={{$noticia->id_noticia}};src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar no Facebook</a></div>
						
						<!-- 
						<div class="sosmed-icon d-inline-flex">
							<a href="#" class="tw" title="Twitter"><i class="fa fa-twitter"></i></a>
						</div>
						-->
						<div class="sosmed-icon d-inline-flex">
							<a href="https://api.whatsapp.com/send?text=Olá, confira a notícia da Pequeninos de Jesus - *{{$noticia->titulo}}* - através do link (http://{{$_SERVER['HTTP_HOST']}}/noticias/post?id={{$noticia->id_noticia}})." class="wpp" title="WhatsApp" target="_blank"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<!-- end author box -->

				</div>

				<div class="col-sm-12 col-md-12 col-lg-3">

					<div class="widget-title">
						Últimas notícias
					</div>
					@foreach($ultimas_noticias as $ultima_noticia)
					<div class="rs-news-1">
						<div class="media-box">
							<a href="/noticias/post"><img src="data:image/jpeg;base64, {{base64_encode( $ultima_noticia->capa )}}" alt="" class="img-fluid"></a>
						</div>
						<div class="body-box">
							<div class="title">
								<a href="/noticias/post?id={{$ultima_noticia->id_noticia}}">{{$ultima_noticia->titulo}}</a>
							</div>
							<div class="meta-date">{{date('d/m/Y', strtotime($ultima_noticia->dt_criacao))}}</div>
						</div>
					</div>
					<br>
					@endforeach
				</div>
				<!-- end sidebar -->

			</div>

		</div>
	</div>
</div>
@endforeach

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