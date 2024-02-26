@extends('layouts.main')

@section('container')
    <h1 class="text-center text-danger border-bottom py-1 my-2">POST CATEGORIES</h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card text-bg-dark">
                        <img src="http://source.unsplash.com/500x400?{{ $category->name }}" class="card-img"
                            alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title flex-fill text-decoration-none p-2 text-white fs-3 text-center"
                                style="background-color:rgba(0,0,0,0.7)">
                                {{ $category->name }}
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
