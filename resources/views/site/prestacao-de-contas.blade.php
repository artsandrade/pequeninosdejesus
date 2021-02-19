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

				<!-- Item 1 -->
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="rs-class-box mb-5">
						<div class="media-box">
							<img src="/template_site/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
						</div>
						<div class="body-box">
							<div class="class-name">
								<div class="title">Janeiro/2021</div>
							</div>
							<div class="open-class">Publicado em: <span>01/01/2021</span></div>
							<p>We provide high quality design at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores...</p>
							<div class="detail">
								<div class="age col">
								<a href="#">Baixar arquivo</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<!-- CTA -->
<div class="section bg-tertiary">
	<div class="content-wrap py-5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-12">
					<div class="cta-1">
						<div class="body-text mb-3">
							<h3 class="my-1 text-secondary">Deseja falar conosco?</h3>
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