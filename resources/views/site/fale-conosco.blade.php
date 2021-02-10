@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
	<div class="content-wrap pos-relative">
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<div class="title-page">Fale conosco</div>
		</div>
		<div class="d-flex justify-content-center bd-highlight mb-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb ">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item active" aria-current="page">Fale conosco</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- CONTACT -->
<div id="contact">
	<div class="content-wrap pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">

					<form action="#" class="form-contact" id="contactForm" data-toggle="validator"
						novalidate="true">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="p_name" placeholder="Enter Name"
										required="">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" id="p_email" placeholder="Enter Email"
										required="">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="p_subject" placeholder="Subject">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="p_phone"
										placeholder="Enter Phone Number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea id="p_message" class="form-control" rows="6"
								placeholder="Enter Your Message"></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<div id="success"></div>
							<button type="submit" class="btn btn-primary">Send Message</button>
						</div>
					</form>
					<div class="spacer-content"></div>

				</div>
				<div class="col-12 col-md-6">
					<ul class="list-info">
						<li>
							<div class="info-icon">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div>
						</li>
						<li>
							<div class="info-icon">
								<span class="fa fa-phone"></span>
							</div>
							<div class="info-text">(0761) 654-123987</div>
						</li>
						<li>
							<div class="info-icon">
								<span class="fa fa-envelope"></span>
							</div>
							<div class="info-text">info@yoursite.com</div>
						</li>
						<li>
							<div class="info-icon">
								<span class="fa fa-clock-o"></span>
							</div>
							<div class="info-text">Mon - Sat 09:00 - 17:00</div>
						</li>
					</ul>

					<!-- MAPS -->
					<div class="maps-wraper">
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992"
							data-marker="/template_site/images/cd-icon-location.png">
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>

@stop