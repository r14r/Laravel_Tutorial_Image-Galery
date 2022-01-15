@extends('templates.base')

@section('title')
<title>Home | Trabalho</title>
@endsection
@section('conteudo')

<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Trabalho</h1>
        <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class="font-italic mb-4">Suspendisse pulvinar bibendum magna, at facilisis velit mollis ut.</p>
        <a href="{{ route('images') }}" role="button" class="btn btn-primary px-5">Entrar</a>
    </div>
</div>
<div class="container py-5">
    <h2 class="h3 font-weight-bold">Lorem Ipsum</h2>
    <div class="row">
        <div class="col-lg-10 mb-4">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="col-lg-8">
            <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong class="font-weight-bold text-dark">adipisicing elit, sed </strong>do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <strong class="font-weight-bold text-dark">reprehenderit in voluptate </strong>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
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