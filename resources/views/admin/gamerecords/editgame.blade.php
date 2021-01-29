@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header">{{ __(' Edit Existing Record') }}</div>

                <div class="card-body">
                   <p><a href="/admin/gamerecords" class="btn btn-warning">Back</a></p>
                        <form class="form" action="/admin/gamerecords/editgame/{{ $games->id }}" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Game Title</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title', $games->title) }}" />
                                @error('title')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="developer">Developer</label>
                                <input class="form-control" type="text" name="developer" value="{{ old('developer', $games->developer) }}" />
                                @error('developer')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="latest_version">Latest Version</label>
                                <input class="form-control" type="text" name="latest_version" value="{{ old('latest_version', $games->latest_version) }}" />
                                @error('latest_version')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                               <select  id="status" name="status" value="{{ old('status', $games->status) }}">
                                    <option>Released</option>
                                    <option>Yet to Release</option>                                   
                                </select>
                                @error('status')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <input class="form-control" type="text" name="summary" value="{{ old('summary', $games->summary) }}" />
                                @error('summary')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control" type="text" name="description" value="{{ old('description', $games->description) }}" />
                                @error('description')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                @if($games->image)
                                <div>
                                    <img width="400px" height="300px" src="/storage/images/{{ old('image', $games->image) }}" />
                                </div>
                                @endif
                                <label for="image">Image</label>
                                <input type="file"  name="image" />
                                @error('image')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control" type="text" name="price" value="{{ old('price', $games->price) }}" />
                                @error('price')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                  <select value="{{ old('category_id', $games->category_id) }}" id="category_id" name="category_id">
                                    @foreach($cats as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach()
                                  </select>
                                                                  
                                @error('category_id')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <input type="hidden" name="id" value="{{ old('id', $games->id) }}" />

                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop