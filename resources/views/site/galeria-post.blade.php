@extends('site/layout')

@section('conteudo')
@foreach($galerias as $galeria)
<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">{{$galeria->nome}}</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item"><a href="/galeria">Galeria</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$galeria->nome}}</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- OUR GALLERY -->
<div class="">
	<div class="content-wrap">
		<div class="container">

			<div class="row popup-gallery gutter-5">
				@foreach($imagens as $imagem)
				<!-- Item 1 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="/template_site/images/galeria/{{$imagem->imagem}}" title="Imagem">
							<img src="/template_site/images/galeria/{{$imagem->imagem}}" style="min-height: 400px; max-height: 400px; min-width: 400px; max-width: 400px" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				@endforeach
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