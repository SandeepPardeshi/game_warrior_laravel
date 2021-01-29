@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 md-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div style="margin-left: 20px; margin-top: 10px;">
                  <a class="btn btn-success" href="/admin/gamerecords/creategame">Add New Record</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col">Developer</th>
                          <th scope="col">Status</th>
                          <th scope="col">Price</th>
                          <th scope="col">Category</th>
                          <th scope="col">Edit/Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($games as $game)
                        <tr>
                          <th scope="row">{{ $game->title }}</th>
                          <td>{{ $game->developer }}</td>
                          <td>{{ $game->status }}</td>
                          <td>${{ $game->price }}.00</td>
                          <td>{{ $game->category->name }}</td>
                          <td style="width: 15%;">
                                <a class="btn btn-info btn-sm" href="/admin/gamerecords/editgame/{{ $game->id }}">Edit</a>&nbsp;

                                <form style="float:right" action="/admin/gamerecords/delete/{{ $game->id }}" method="post" class="form-inline"> 
                                        @csrf 
                                        @method('DELETE') 
                                        <input type="hidden" name="id" value="{{ $game->id }}" />
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection