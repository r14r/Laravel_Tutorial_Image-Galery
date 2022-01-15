@extends('templates.base')

@section('title')
<title>Images | Trabalho</title>
@endsection
@section('conteudo')

<style>
    h2 {
        padding: 0 !important;
    }

    .imgItem {
        width: 45%;
        box-shadow: 0px 0px 5px -1px grey;
        padding: 0px;
        border-radius: 14px;
        overflow: hidden;
        margin: 10px;
        transition: 0.5s;
    }

    .imgzinha {
        position: relative;
        width: 300px;
        height: 300px;
        display: block;
        margin: auto;
        object-fit: cover;
    }

    .description {
        padding: 15px;
    }

    a {
        color: black;
        text-decoration: none !important;
    }

    .imgItem:hover {
        transform: scale(1.02);
        transition: 0.5s;
        z-index: 999;
    }

    p {
        text-transform: capitalize;
        margin: 0px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
        justify-content: space-evenly;
        width: 100%;
        position: absolute;
        left: 0;
    }

    .column {
        width: auto !important;
        padding: 0 4px;
    }

    h5 {
        text-transform: capitalize;
    }
</style>
<div style="background: url(https://jooinn.com/images/urban-1.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Images</h1>
        <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class="font-italic mb-4">Suspendisse pulvinar bibendum magna, at facilisis velit mollis ut.</p>
        <a href="{{ route('images.add') }}" class='btn btn-primary' style='width:100px'>Adicionar</a>
    </div>
</div>
<div class="container py-5">
    <div class='row'>

        <!-- Checa se o array de images foi definido -->
        <!-- Se for, vai mostrar todas as images -->
        <!-- Senão, vai mostrar um aviso -->

        @isset($img)
        @foreach($img as $i)
        <div class='imgItem'>
            <a href="{{ route('images.show', $i) }}" class='linkImg' style=>
                <div class='description'>
                    <p>
                        <b>{{$i->title}}</b> |
                        <!-- Limita o número de caracteres mostrados na descrição -->
                        <!-- Se for maior que 60, ele corta até os 60 caracteres e adiciona reticências -->
                        <!-- Senão, retorna a descrição normal -->
                        @php
                        $i->description = (strlen($i->description) > 60) ? substr($i->description, 0, 60) . '...' : $i->description;
                        echo($i->description)
                        @endphp
                    </p>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h4 style='color:#a5c6f6; text-align:center'>Nenhum Resultado Encontrado!</h4>
        <img src='https://loja.tintasmc.com.br/static/media/notfound.5f80486a.webp' style='width:450px' />
        @endisset

    </div>
</div>

<script>
    $(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 10) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
</script>

@endsection