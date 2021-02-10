@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div class="section banner-page" data-background="/template_site/images/dummy-img-1920x300.jpg">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">Sobre nós</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item active" aria-current="page">Sobre nós</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- WHY CHOOSE US -->
<div class="section">
	<div class="content-wrap pb-0">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-sm-12 col-md-12 col-lg-7">
					<h2 class="section-heading mb-5">
						Nossa história começou em ...
					</h2>
					<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
						euismod. Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis
						luctus novum est praesent. Praesent interdum est gravida vehicula est node maecenas loareet
						morbi a dosis luctus novum est praesent.</p>
					<p class="p-check ">100% education, for your kids, consectetuer adipiscing elit, sed diam
						nonummy nibh euismod.</p>
					<p class="p-check ">More programs activities, sed diam nonummy nibh euismod. Lorem ipsum dolor
						sit amet.</p>
					<p class="p-check ">More benefit nonummy nibh euismod. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit.</p>
					<div class="spacer-90"></div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5">
					<img src="/template_site/images/dummy-img-600x700.jpg" alt="" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>

<div class="section">
	<div class="content-wrap pb-0">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-sm-12 col-md-12 col-lg-5">
					<img src="/template_site/images/dummy-img-600x700.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-7">

					<p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
						euismod. Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis
						luctus novum est praesent. Praesent interdum est gravida vehicula est node maecenas loareet
						morbi a dosis luctus novum est praesent.</p>
					<p class="p-check ">100% education, for your kids, consectetuer adipiscing elit, sed diam
						nonummy nibh euismod.</p>
					<p class="p-check ">More programs activities, sed diam nonummy nibh euismod. Lorem ipsum dolor
						sit amet.</p>
					<p class="p-check ">More benefit nonummy nibh euismod. Lorem ipsum dolor sit amet, consectetuer
						adipiscing elit.</p>
					<div class="spacer-90"></div>
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