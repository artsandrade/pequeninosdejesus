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
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<img src="template_site/images/fachada.png" alt="" class="img-fluid img-border">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<h2 class="section-heading">
						Sejm bem-vindos
					</h2>
					<p>É com imensa alegria que o Instituto Educacional Pequeninos de Jesus dá as boas-vindas aos alunos, pais e responsáveis e a toda equipe que compõe o quadro de funcionários.</p>
					<p>Nossa clientela são crianças devidamente matriculadas na Educação Infantil de 1 ano a 5 anos e 11 meses. O Instituto, neste ano de 2021 completa 30 anos de fundação e traz em seu nome o maior educador de todos os tempos, Jesus Cristo.</p>
					<p>Segundo D. Deusmanda, fundadora deste Instituto, somos todos Pequeninos de Jesus nesta jornada evolutiva rumo ao conhecimento. Empenhamos para que seu ideal cristão perpetue nas novas gerações, através dos bons exemplos e dos valores morais e éticos.</p>
					<p>Damos boas-vindas a todos os pais e responsáveis, e a todas as crianças, desejando-lhes um ano de muitas conquistas e aprendizado. Que o Cristo esteja sempre conosco, sendo luz e guia e que todos nós sejamos faróis de esperança na vida de cada criança e de cada família que passa pelo Instituto Educacional Pequeninos de Jesus.</p>
					<p class="text-center">
						José Maria Perim
						<br>
						Presidente
					</p>
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
							@foreach($parametros_inicio as $parametro)
							@if($parametro->id_parametro==1)
							<h2>{{$parametro->numero}}</h2>
							@endif
							@endforeach
						</div>
						<div class="title">Alunos matriculados</div>
					</div>
				</div>
				<!-- Item 4 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-quaternary">
						<div class="box-fun">
							@foreach($parametros_inicio as $parametro)
							@if($parametro->id_parametro==2)
							<h2>{{$parametro->numero}}</h2>
							@endif
							@endforeach
						</div>
						<div class="title">Alunos que já estudaram aqui</div>
					</div>
				</div>
				<!-- Item 2 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-secondary">
						<div class="box-fun">
							@foreach($parametros_inicio as $parametro)
							@if($parametro->id_parametro==3)
							<h2>{{$parametro->numero}}</h2>
							@endif
							@endforeach
						</div>
						<div class="title">Colaboradores</div>
					</div>
				</div>
				<!-- Item 3 -->
				<div class="col-sm-6 col-md-3">
					<div class="rs-funfact bg-tertiary">
						<div class="box-fun">
							@foreach($parametros_inicio as $parametro)
							@if($parametro->id_parametro==4)
							<h2>{{$parametro->numero}}</h2>
							@endif
							@endforeach
						</div>
						<div class="title">Salas de aula</div>
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
<input type="hidden" id="dados_eventos" value="{{ json_encode($eventos) }}">
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');
		var eventos = document.getElementById('dados_eventos');
		var dados_eventos = JSON.parse(eventos.value);
		var events = [];
		for (i = 0; i < dados_eventos.length; i++) {
			//var data = ;
			//var hora = ;
			var dados = {
				title: dados_eventos[i]['nome'],
				start: dados_eventos[i]['data'].replace(' ', 'T'),
				description: dados_eventos[i]['local'],
				backgroundColor: dados_eventos[i]['cor']
			};
			events.push(dados);
		}
		console.log(events);
		var calendar = new FullCalendar.Calendar(calendarEl, {
			eventClick: function(info) {
				var eventObj = info.event;
				var description = eventObj.extendedProps;

				alert('Evento: ' + eventObj.title + '\n' +
					'Local: ' + description.description + '\n' +
					'Data/hora: ' + eventObj.start.toLocaleDateString() + ' '+ eventObj.start.toLocaleTimeString());
				console.log(info)
			},
			initialView: 'dayGridMonth',
			locale: 'pt-br',
			events: events
		});
		calendar.render();
	});
</script>

<!-- WHY CHOOSE US -->
<div class="section bgi-repeat" style="background-color: #3f4095;">
	<div class="content-wrap pb-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-12 col-lg-3">
					<h2 class="section-heading">
						Nosso calendário
					</h2>
					<p class="text-white">Ao lado você pode conferir nosso calendário com todas as datas importantes.</p>
					<div class="spacer-90"></div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-9">
					<div id="calendar" style="background-color: white;"></div>
					<div class="spacer-90"></div>
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