@extends('site/layout')

@section('conteudo')

@foreach($prestacoes as $prestacao)

@section('meta')
<meta property="og:url" content="http://{{$_SERVER['HTTP_HOST']}}/prestacao-de-contas/post?id={{$prestacao->id_prestacao}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Pequeninos de Jesus" />
<meta property="og:description" content="{{$prestacao->titulo}}" />
<meta property="og:image" content="http://{{$_SERVER['HTTP_HOST']}}/template_site/images/prestacao-de-contas.png" />
@stop

<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">{{$prestacao->titulo}}</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item"><a href="/prestacao-de-contas">Prestação de contas</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$prestacao->titulo}}</li>
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
						<h2 class="title">{{$prestacao->titulo}}</h2>
						<div class="meta-date">{{date('m/Y', strtotime($prestacao->data))}}</div>
						{!! $prestacao->prestacao !!}
					</div>
					<!-- end single blog -->

					<div class="author-box">
						<h4>Compartilhe essa prestação de contas nas redes sociais</h4>
						<div class="sosmed-icon d-inline-flex">
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://{{$_SERVER['HTTP_HOST']}}/prestacao-de-contas/post?id={{$prestacao->id_prestacao}}" class="fb" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						</div>
						<!-- 
						<div class="sosmed-icon d-inline-flex">
							<a href="#" class="tw" title="Twitter"><i class="fa fa-twitter"></i></a>
						</div>
						-->
						<div class="sosmed-icon d-inline-flex">
							<a href="https://api.whatsapp.com/send?text=Olá, confira a prestação de contas da Pequeninos de Jesus *{{$prestacao->titulo}}* através do link (http://{{$_SERVER['HTTP_HOST']}}/prestacao-de-contas/post?id={{$prestacao->id_prestacao}})." class="wpp" title="WhatsApp" target="_blank"><i class="fa fa-phone"></i></a>
						</div>
					</div>
					<!-- end author box -->

				</div>

				<div class="col-sm-12 col-md-12 col-lg-3">

					<div class="widget-title">
						Últimas prestações de conta
					</div>
					@foreach($ultimas_prestacoes as $ultima)
					<div class="rs-news-1">
						<div class="media-box">
							<a href="/prestacao-de-contas/post"><img src="/template_site/images/prestacao-de-contas.png" alt="" class="img-fluid"></a>
						</div>
						<div class="body-box">
							<div class="title">
								<a href="/prestacao-de-contas/post?id={{$ultima->id_prestacao}}">{{$ultima->titulo}}</a>
							</div>
							<div class="meta-date">{{date('m/Y', strtotime($ultima->data))}}</div>
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