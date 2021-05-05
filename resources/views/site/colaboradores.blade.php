@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">Colaboradores</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item active" aria-current="page">Colaboradores</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- MEET OREN TEAM -->
<div class="section">
	<div class="content-wrap">
		<div class="container">

			<div class="row">

				@foreach($colaboradores as $colaborador)
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="rs-team-1">
						<div class="media-box"><img src="data:image/jpeg;base64, {{base64_encode($colaborador->foto)}}" style="min-height: 350px; max-height: 350px; min-width: 350px; max-width: 350px" title="{{$colaborador->nome}}" alt="" class="img-fluid"></div>
						<div class="body">
							<div class="title" style="color: #3f4095;">{{$colaborador->nome}}</div>
							<div class="position mb-0">{{$colaborador->funcao}} (Desde {{$colaborador->desde}})</div>
							<br>
							<!--<p class="p-3 text-jutify"></p>-->
						</div>
					</div>
				</div>
				@endforeach

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