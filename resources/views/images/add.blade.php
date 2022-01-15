@extends('templates.base')

@section('title')
<title>Add | Trabalho</title>
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
        <form action="{{ route('images.insert') }}" method='post' enctype="multipart/form-data" style='max-width:500px; margin:auto;'>
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input required name='title' type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Insira o título da Image">
                <small id="titleHelp" class="form-text text-muted">Dê um nome bonito à sua image. Todo mundo vai ver :)</small>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <input required name='description' type="text" class="form-control" id="description" placeholder="Insira a descrição da Image">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input required name='image' type="file" class="form-control" id="image">
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