@extends('layout')

@section('title', 'Home')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web ANDERCOD</h1>
            <p class="lead text-secondary">gracias por visitar el sitio , espero te guste</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" height="400px;" width="400px;" src="/img/pc.png" alt="Desarrollo web">
        </div>
    </div>
</div>

@endsection
