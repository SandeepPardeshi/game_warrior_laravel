<!-- Main defined layout will be called here -->
@extends('layouts/game')

<!-- Content will be yielded where required -->
@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Game Warriors!</div>
        <div class="masthead-heading text-uppercase">It's not just gaming, It's a Religion</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/game">Game's List</a>
    </div>
</header>

@stop()