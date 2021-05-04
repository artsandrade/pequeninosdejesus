<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pequeninos de Jesus</title>
	<meta name="description" content="O Instituto Educacional Pequeninos de Jesus entidade sem fins lucrativos e de caráter filantrópico foi fundado por Deusmanda Ferreira de Oliveira, juntamente com 53pessoas amigas de ideal, em 02 de junho de 1991.">
	<meta name="keywords" content="pequeninos de jesus, frutal mg, instituto pequeninos de jesus frutal mg, ensino em frutal, instituto educacional em frutal mg">
	<meta name="author" content="Nucleo de Praticas em Sistemas de Informacao - Universidade do Estado de Minas Gerais">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="/template_site/images/icone.ico">
	<link rel="apple-touch-icon" href="/template_site/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/template_site/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/template_site/images/apple-touch-icon-114x114.png">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/template_site/css/vendor/bootstrap-social.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="/template_site/css/style.css" />

	<link href='/template_site/calendar/main.css' rel='stylesheet' />
	<script src='/template_site/calendar/main.js'></script>
	<script src='/template_site/calendar/locales/pt-br.js'></script>

	<script src="/template_site/js/vendor/modernizr.min.js"></script>

	@yield('header')

</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<!-- <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a> -->

	<!-- HEADER -->
	<div class="header header-1">

		<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-8 col-md-8">
						<div class="info">
							<div class="info-item">
								<i class="fa fa-phone"></i> (34) 3423-5608
							</div>
							<div class="info-item">
								<i class="fa fa-envelope-o"></i> <a href="mailto:contato@pequeninosdejesus.com.br" title="">contato@pequeninosdejesus.com.br</a>
							</div>
							<div class="info-item">
								<i class="fa fa-wrench"></i> <a href="/login" title="">Intranet</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="sosmed-icon pull-right d-inline-flex">
							<a href="https://www.facebook.com/InstitutoPequeninosdeJesus/" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/pequeninos_dejesus/" target="_blank" class="ig"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
				<nav id="navbar-example" class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="/">
						<img src="/template_site/images/logo-pequeninos.png" alt="Logomarca Pequeninos de Jesus">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="/">INÍCIO</a>
							</li>
							<li class="nav-item dropdown dmenu">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									INSTITUCIONAL
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/colaboradores">COLABORADORES</a>
									<a class="dropdown-item" href="/galeria">GALERIA</a>
									<a class="dropdown-item" href="/prestacao-de-contas">PRESTAÇÃO DE CONTAS</a>
									<a class="dropdown-item" href="/sobre-nos">SOBRE NÓS</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/noticias">NOTÍCIAS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/fale-conosco">FALE CONOSCO</a>
							</li>
						</ul>
					</div>
				</nav> <!-- -->

			</div>
		</div>

	</div>

	@yield('conteudo')


	<!-- FOOTER SECTION -->
	<div class="footer" style="background-color: #FFF; border-top:1px solid black">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="footer-item">
							<img src="/template_site/images/logo-pequeninos.png" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p style="color: #000;">É com imensa alegria que o Instituto Educacional Pequeninos de Jesus dá as boas-vindas aos alunos, pais e responsáveis e a toda equipe que compõe o quadro de funcionários.</p>
							<a href="/sobre-nos" style="color: #000;"><i class="fa fa-angle-right"></i> Leia mais</a>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="footer-item">
							<div class="footer-title" style="color: #FD4D40;">
								Informações de contato
							</div>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker" style="color: #FD4D40;"></span>
									</div>
									<div class="info-text" style="color: #000;">Rua João Signorelli, 880 - XX - Frutal/MG</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone" style="color: #FD4D40;"></span>
									</div>
									<div class="info-text" style="color: #000;">(34) 3423-5608</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope" style="color: #FD4D40;"></span>
									</div>
									<div class="info-text" style="color: #000;">contato@pequeninosdejesus.com.br</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o" style="color: #FD4D40;"></span>
									</div>
									<div class="info-text" style="color: #000;">Segunda - Sexta 08:00 - 17:00</div>
								</li>
							</ul>

						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="footer-item">
							<div class="footer-title" style="color: #FD4D40;">
								Redes sociais
							</div>
							<p style="color: #000;">Siga-nos nas redes sociais para acompanhar todas as informações.</p>
							<div class="sosmed-icon d-inline-flex">
								<a href="https://www.facebook.com/InstitutoPequeninosdeJesus/" target="_blank" class="fb"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/pequeninos_dejesus/" target="_blank" class="ig"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright {{ now()->year}} &copy; <span class="color-primary">Desenvolvido pelo Núcleo de Práticas em Sistemas de Informação - Universidade do Estado de Minas Gerais</span>.</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- JS VENDOR -->
	<script src="/template_site/js/vendor/jquery.min.js"></script>
	<script src="/template_site/js/vendor/bootstrap.min.js"></script>
	<script src="/template_site/js/vendor/owl.carousel.js"></script>
	<script src="/template_site/js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="/template_site/js/vendor/validator.min.js"></script>
	<script src="/template_site/js/vendor/form-scripts.js"></script>

	<script src="/template_site/js/script.js"></script>

	@yield('footer')

	<style>
		#imagem_whats {
			position: fixed;
			right: 0;
			bottom: 0;
			display: block;
			cursor: pointer;
			z-index: 9999999;
			float: right
		}

		#imagem_whats2 {
			position: fixed;
			right: 0;
			bottom: 0;
			display: block;
			cursor: pointer;
			z-index: 9999999;
			float: right;
			display: none
		}

		@media only screen and (max-width: 999px) and (min-width: 100px) {
			#imagem_whats {
				display: none
			}

			#imagem_whats2 {
				display: block
			}
		}
	</style>
	<img id="imagem_whats" class="mr-2 mb-2" style="border-color: #000;" src="/template_site/images/whatsapp.png" onClick="window.open('https://web.whatsapp.com/send?phone=+553434235608&amp;text=Olá, tudo bem?', '_blank');"><img id="imagem_whats2" class="mr-2 mb-2" style="border-color: #000;" src="/template_site/images/whatsapp.png" onClick="window.open('https://api.whatsapp.com/send?phone=+553434235608&amp;text=Olá, tudo bem?', '_blank');">
	<div class="preloader">
		<div class="preloaderimg"></div>
	</div>

</body>

</html>