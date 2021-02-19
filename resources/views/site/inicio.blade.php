@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div id="oc-fullslider" class="banner">
	<div class="owl-carousel owl-theme full-screen">
		<div class="item">
			<img src="template_site/images/slides/matriculas.png" alt="Slider">
			<div class="overlay-bg"></div>
			<div class="container d-flex align-items-center">
				<div class="wrap-caption">
					<h3 class="caption-supheading">Matrículas abertas</h3>
					<h1 class="caption-heading">Garanta a vaga de seu filho em nosso instituto!</h1>
					<br>
					<a href="#" class="btn btn-secondary">Fazer matrícula</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="template_site/images/slides/noticias.png" alt="Slider">
			<div class="overlay-bg"></div>
			<div class="container d-flex align-items-center">
				<div class="wrap-caption">
					<h3 class="caption-supheading">Mantenha-se atualizado</h3>
					<h1 class="caption-heading">Confira todas as notícias da Pequeninos de Jesus</h1>
					<br>
					<a href="/noticias" class="btn btn-secondary">Leia mais</a>
				</div>
			</div>
		</div>
	</div>
	<div class="custom-nav owl-nav"></div>
</div>

<!-- SHORTCUT -->
<div class="section services">
	<div class="content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="row col-0 overlap no-gutters">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<!-- BOX 1 -->
							<div class="rs-feature-box-1 bg-primary">
								<i class="fa fa-users"></i>
								<div class="body">
									<h4>Conheça os colaboradores</h4>
									<p>Confira nosso quadro de colaboradores que contribuem para a excelência do instituto.</p>
									<div class="spacer-10"></div>
									<a href="/colaboradores" class="btn">CONHECER</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<!-- BOX 2 -->
							<div class="rs-feature-box-1 bg-secondary">
								<i class="fa fa-home"></i>
								<div class="body">
									<h4>Visite virtualmente a instituição</h4>
									<p>Conheça nossa história e confira as fotos da Pequeninos de Jesus.</p>
									<div class="spacer-10"></div>
									<a href="/sobre-nos" class="btn">LER MAIS</a>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<!-- BOX 3 -->
							<div class="rs-feature-box-1 bg-tertiary">
								<i class="fa fa-photo"></i>
								<div class="body">
									<h4>Veja nossa galeria de fotos</h4>
									<p>Todas as fotos das nossas ações e eventos em um único local.</p>
									<div class="spacer-10"></div>
									<a href="/galeria" class="btn">VER GALERIA</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- WELCOME TO KIDS -->
<div class="section">
	<div class="content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<img src="template_site/images/fachada.png" alt="" class="img-fluid img-border">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<h2 class="section-heading">
						Sejm bem-vindos
					</h2>
					<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sitdolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent. Magna est consectetur interdum modest dictum.</p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. </p>
					<div class="spacer-10"></div>
					<a href="/sobre-nos" class="btn btn-secondary">LEIA MAIS SOBRE NÓS</a>
					<div class="spacer-30"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- FUNFACT -->
<div class="section bgi-overlay bgi-cover-center" style="background-color: #3f4095;">
	<div class="content-wrap">
		<div class="container">
			<div class="row">
				<!-- Item 1 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-primary">
						<div class="box-fun">
							<h2>852</h2>
						</div>
						<div class="title">Alunos matriculados</div>
					</div>
				</div>
				<!-- Item 2 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-secondary">
						<div class="box-fun">
							<h2>125</h2>
						</div>
						<div class="title">Professores</div>
					</div>
				</div>
				<!-- Item 3 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-tertiary">
						<div class="box-fun">
							<h2>32</h2>
						</div>
						<div class="title">Salas de aula</div>
					</div>
				</div>
				<!-- Item 4 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-quaternary">
						<div class="box-fun">
							<h2>15</h2>
						</div>
						<div class="title">Alunos que já estudaram aqui</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- OUR ARTICLES -->
<div class="">
	<div class="content-wrap">
		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading text-center mb-5">
						Depoimentos dos pais/responsáveis
					</h2>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="rs-testimonial-1">
						<div class="media">
							<img src="template_site/images/dummy-img-400x400.jpg" alt="" class="img-fluid">
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
							<div class="title">John Doel</div>
							<div class="company">Businessman</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="rs-testimonial-1">
						<div class="media">
							<img src="template_site/images/dummy-img-400x400.jpg" alt="" class="img-fluid">
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
							<div class="title">Raisa Doel</div>
							<div class="company">House Keeper</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="rs-testimonial-1">
						<div class="media">
							<img src="template_site/images/dummy-img-400x400.jpg" alt="" class="img-fluid">
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
							<div class="title">Josh Doel</div>
							<div class="company">Contractor</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="rs-testimonial-1">
						<div class="media">
							<img src="template_site/images/dummy-img-400x400.jpg" alt="" class="img-fluid">
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
							<div class="title">Sasha Doel</div>
							<div class="company">Freelance</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<!-- WHY CHOOSE US -->
<div class="section bgi-repeat" style="background-color: #3f4095;">
	<div class="content-wrap pb-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-12 col-lg-7">
					<h2 class="section-heading">
						Nosso calendário
					</h2>
					<p class="text-white">Ao lado você pode conferir nosso calendário com todas as datas importantes.</p>
					<div class="spacer-90"></div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5">
					<img src="template_site/images/dummy-img-600x700.jpg" alt="" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>

<!-- OUR GALLERY -->
<div class="">
	<div class="content-wrap">
		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading text-center mb-5">
						Confira as fotos recentes
					</h2>
				</div>
			</div>

			<div class="row popup-gallery gutter-5">
				<!-- Item 1 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="template_site/images/quadra/img1.png" title="Inauguração da quadra">
							<img src="template_site/images/quadra/img1.png" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Item 1 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="template_site/images/quadra/img2.png" title="Inauguração da quadra">
							<img src="template_site/images/quadra/img2.png" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Item 1 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="template_site/images/quadra/img3.png" title="Inauguração da quadra">
							<img src="template_site/images/quadra/img3.png" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Item 2 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="template_site/images/quadra/img4.png" title="Inauguração da quadra">
							<img src="template_site/images/quadra/img4.png" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Item 3 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="template_site/images/quadra/img5.png" title="Inauguração da quadra">
							<img src="template_site/images/quadra/img5.png" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Item 4 -->
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="box-gallery">
						<a href="template_site/images/quadra/img6.png" title="Inauguração da quadra">
							<img src="template_site/images/quadra/img6.png" alt="" class="img-fluid">
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
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