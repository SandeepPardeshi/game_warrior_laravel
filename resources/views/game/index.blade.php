<!-- Main defined layout will be called here -->
@extends('layouts/game')

<!-- Content will be yielded where required -->
@section('content')

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            @foreach($cats as $cat)
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-lg" href="/category/{{ $cat->name }}">{{ $cat->name }}</a>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Game List</h2>
            <h3 class="section-subheading text-muted">List of some awesome games based on multiple categories.</h3>
        </div>
        <div class="row">
            @foreach($games as $game)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" href="/game/{{ $game->slug }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" width="400px" height="300px" src="/storage/images/{{ $game->image }}" alt="{{ $game->image }}" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $game->title }}</div>
                        <div class="portfolio-caption-subheading text-muted"><strong>Developer:</strong> {{ $game->developer }}</div>
                        <div class="portfolio-caption-subheading text-muted"><strong>Status:</strong> {{ $game->status }}</div>
                    </div>
                </div>
            </div>
            @endforeach
            <div style="margin: 0 auto;"><!-- Pagination display -->
                <div class="pagination justify-content-center mb-6">
                    {{ $games->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@stop()