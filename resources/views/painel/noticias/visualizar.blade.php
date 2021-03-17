@extends('painel/base/layout')

@section('cabecalho')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/painel">Início</a></li>
        <li class="breadcrumb-item" aria-current="page">Notícias</li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
    </ol>
</nav>
<h1 class="m-0">Visualizar</h1>
@stop

@section('conteudo')
<div class="card card-form">
    <div class="row no-gutters">
        <div class="col-lg-12 card-body">
            <form>
                <div class="form-group">
                    <label for="titulo">Título da notícia</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="Nome da notícia" readonly>
                </div>
                <div class="form-group">
                    <label for="img_capa">Capa da notícia</label>
                    <div class="col-sm-12 col-md-4">
                        <img src="/template_painel/images/stories/256_rsz_euan-carmichael-666378-unsplash.jpg" alt="" class="card-img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="img_capa">Conteúdo</label>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur mattis dignissim. Sed tincidunt, massa eu egestas posuere, massa libero pellentesque ex, ac vestibulum elit enim id neque. Ut et leo velit. Donec bibendum lorem in luctus sollicitudin. Quisque fermentum odio vitae neque pretium, id tincidunt magna sagittis. Praesent erat massa, sollicitudin eu porttitor sed, commodo quis lorem. Fusce vitae varius odio. Integer ac vehicula neque. Suspendisse rhoncus mauris sed lacus tempus, sed feugiat tortor tempor.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur mattis dignissim. Sed tincidunt, massa eu egestas posuere, massa libero pellentesque ex, ac vestibulum elit enim id neque. Ut et leo velit. Donec bibendum lorem in luctus sollicitudin. Quisque fermentum odio vitae neque pretium, id tincidunt magna sagittis. Praesent erat massa, sollicitudin eu porttitor sed, commodo quis lorem. Fusce vitae varius odio. Integer ac vehicula neque. Suspendisse rhoncus mauris sed lacus tempus, sed feugiat tortor tempor.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur mattis dignissim. Sed tincidunt, massa eu egestas posuere, massa libero pellentesque ex, ac vestibulum elit enim id neque. Ut et leo velit. Donec bibendum lorem in luctus sollicitudin. Quisque fermentum odio vitae neque pretium, id tincidunt magna sagittis. Praesent erat massa, sollicitudin eu porttitor sed, commodo quis lorem. Fusce vitae varius odio. Integer ac vehicula neque. Suspendisse rhoncus mauris sed lacus tempus, sed feugiat tortor tempor.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur mattis dignissim. Sed tincidunt, massa eu egestas posuere, massa libero pellentesque ex, ac vestibulum elit enim id neque. Ut et leo velit. Donec bibendum lorem in luctus sollicitudin. Quisque fermentum odio vitae neque pretium, id tincidunt magna sagittis. Praesent erat massa, sollicitudin eu porttitor sed, commodo quis lorem. Fusce vitae varius odio. Integer ac vehicula neque. Suspendisse rhoncus mauris sed lacus tempus, sed feugiat tortor tempor.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur mattis dignissim. Sed tincidunt, massa eu egestas posuere, massa libero pellentesque ex, ac vestibulum elit enim id neque. Ut et leo velit. Donec bibendum lorem in luctus sollicitudin. Quisque fermentum odio vitae neque pretium, id tincidunt magna sagittis. Praesent erat massa, sollicitudin eu porttitor sed, commodo quis lorem. Fusce vitae varius odio. Integer ac vehicula neque. Suspendisse rhoncus mauris sed lacus tempus, sed feugiat tortor tempor.</p>
                </div>
                <br>
                <div class="form-group text-right">
                    <a href="/painel/noticias" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop