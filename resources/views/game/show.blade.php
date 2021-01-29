<!-- Main defined layout will be called here -->
@extends('layouts/game')

<!-- Content will be yielded where required -->
@section('content')

<!-- Portfolio Modals-->

<section class="page-section" id="portfolioModal">
    <div class="container">
        <div class="col-lg-12">
            <div class="modal-body">
                <!-- Project Details Go Here-->
                <h2 class="text-uppercase">{{ $game->title }}</h2>
                <p class="item-intro text-muted">{{ $game->summary }}</p>
                <img class="img-fluid d-block mx-auto" src="/storage/images/{{ $game->image }}" alt="" />
                <p>{{ $game->description }}</p>
                <ul class="list-inline">
                    <li><strong>Date:</strong> {{ $game->created_at }}</li>
                    <li><strong>Price:</strong> ${{ $game->price }}.00</li>
                    <li><strong>Category:</strong> {{ $game->category->name }}</li>
                </ul>
                <a href="/game" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</section>

@stop()