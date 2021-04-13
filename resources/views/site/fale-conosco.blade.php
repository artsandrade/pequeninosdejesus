@extends('site/layout')

@section('conteudo')

<!-- BANNER -->
<div class="section banner-page" style="background-color: #3f4095;">
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

					<form action="javascript:void(0)" method="POST" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
						<div class="row">
							@csrf
							<input type="hidden" name="url_form" id="url_form" value="{{route('atendimentos_inserir')}}">
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label for="">Nome</label>
									<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required="">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-8">
								<div class="form-group">
									<label for="">Nome do aluno</label>
									<input type="text" class="form-control" id="nome_aluno" name="nome_aluno" placeholder="Digite o nome do aluno" required="">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="form-group">
									<label for="">CPF do aluno</label>
									<input type="text" class="form-control" id="cpf_aluno" name="cpf_aluno" placeholder="Digite o CPF do aluno" required="">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label for="">E-mail</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label for="">Telefone</label>
									<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<label for="">Celular</label>
									<input type="text" class="form-control" id="celular" name="celular" placeholder="Digite seu celular">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<label for="">Assunto</label>
									<select class="form-control" name="assunto" id="assunto" required="">
										<option value="">Selecione</option>
										<option value="Crítica">Crítica</option>
										<option value="Dúvida">Dúvida</option>
										<option value="Solicitação de documentos">Solicitação de documentos</option>
										<option value="Sugestão">Sugestão</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
							</div>

						</div>
						<div class="form-group">
							<label for="">Mensagem</label>
							<textarea id="mensagem" class="form-control" name="mensagem" rows="6" placeholder="Escreva sua mensagem..."></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<div id="success"></div>
							<button type="submit" class="btn btn-primary" id="btn-inserir">Enviar mensagem</button>
						</div>
					</form>
					<div class="spacer-content"></div>

				</div>
				<div class="col-12 col-md-6">
					<ul class="list-info">
						<li>
							<div class="info-icon">
								<span class="fa fa-map-marker" style="color: #FD4D40;"></span>
							</div>
							<div class="info-text">Rua João Signorelli, 880 - XX - Frutal/MG</div>
						</li>
						<li>
							<div class="info-icon">
								<span class="fa fa-phone" style="color: #FD4D40;"></span>
							</div>
							<div class="info-text">(34) 3423-5608 (Disponível também para WhatsApp)</div>
						</li>
						<li>
							<div class="info-icon">
								<span class="fa fa-envelope" style="color: #FD4D40;"></span>
							</div>
							<div class="info-text">contato@pequeninosdejesus.com.br</div>
						</li>
						<li>
							<div class="info-icon">
								<span class="fa fa-clock-o" style="color: #FD4D40;"></span>
							</div>
							<div class="info-text">Segunda - Sexta 08:00 - 17:00</div>
						</li>
					</ul>

					<!-- MAPS -->
					<div class="maps-wraper">
						<div class="maps-wraper">
							<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-48.91980707645416%2C-20.036564768754037%2C-48.91681373119355%2C-20.035022603154957&amp;layer=mapnik&amp;marker=-20.03579368784666%2C-48.91831040382385" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=-20.03579&amp;mlon=-48.91831#map=19/-20.03579/-48.91831">Ver mapa ampliado</a></small>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>

<script src="/public/template_site/functionsJs/atendimentos.js" defer></script>

<div class="modal fade" id="modal-resposta" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mensagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="texto-resposta"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
<!--Jquery Mask (formatação de campos) -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
@stop