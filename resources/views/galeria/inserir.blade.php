@extends('templates.base')

@section('titulo')
<title>Inserir | Trabalho</title>
@endsection
@section('conteudo')

<style>
    .form-group {
        display: block;
        text-align: center;
        margin-top: 25px;
    }
</style>

<div class="container py-5">
    <h1 style='text-align:center'>Lorem Ipsum</h1>
    <div class="row">
        <form action="{{ route('galeria.insert') }}" method='post' enctype="multipart/form-data" style='max-width:500px; margin:auto;'>
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input required name='titulo' type="text" class="form-control" id="titulo" aria-describedby="tituloHelp" placeholder="Insira o título da Imagem">
                <small id="tituloHelp" class="form-text text-muted">Dê um nome bonito à sua imagem. Todo mundo vai ver :)</small>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input required name='descricao' type="text" class="form-control" id="descricao" placeholder="Insira a descrição da Imagem">
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input required name='imagem' type="file" class="form-control" id="imagem">
            </div>
            <div class="form-group">
                <input type='submit' class='btn btn-primary' />
            </div>
        </form>
    </div>
</div>
<script>
    $(function() {
        $('.navbar').addClass('active');
    });
</script>


@endsection