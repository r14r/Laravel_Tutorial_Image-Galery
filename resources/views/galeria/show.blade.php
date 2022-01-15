@extends('templates.base')

@isset($imagem)
@section('titulo')
<title>{{$imagem->titulo}} | Trabalho</title>
@endsection
@else
@section('titulo')
<title>Imagem | Trabalho</title>
@endsection
@endisset
@section('conteudo')

<style>
    h2 {
        padding: 0 !important;
    }

    .imgItem {
        width: auto;
        box-shadow: 0px 0px 5px -1px grey;
        padding: 0px;
        border-radius: 14px;
        overflow: hidden;
        margin: 20px;
        transition: 0.5s;
    }

    .imgzinha {
        position: relative;
        max-width: 100%;
        display: block;
        margin: auto;
    }

    .descricao {
        padding: 15px;
        width: 30vw;
    }

    h1 {
        margin-top: 0px;
    }

    .row {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        padding: 0 4px;
        align-items: center;
        text-align: center;
    }

    .column {
        width: auto !important;
        padding: 0 4px;
    }

    h5 {
        text-transform: capitalize;
    }

    body {
        min-height: 90vh !important;
    }
</style>
<div class="container mt-4 py-5">
    <div class='row'>

        <!-- Checa se a imagem foi definida -->
        <!-- Se for, vai mostrar os dados da imagem -->
        <!-- Senão, vai mostrar um aviso -->

        @isset($imagem)
        <div class='imgItem'>
            <img loading=lazy src="{{ '/img/' . $imagem->url }}" class='imgzinha' />
        </div>
        <div class='descricao'>
            <h1 class='display-4'>{{$imagem->titulo}}</h1>
            <p>{{$imagem->descricao}}</p>
        </div>
        @else
        <h4 style='color:#a5c6f6; text-align:center'>Nenhum Resultado Encontrado!</h4>
        <img src='https://loja.tintasmc.com.br/static/media/notfound.5f80486a.webp' style='width:450px' />
        @endisset
    </div>
</div>
<script>
    $(function() {
        $('.navbar').addClass('active');
    });
</script>

@endsection