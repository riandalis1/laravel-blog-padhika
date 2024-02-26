@extends('layouts.main')

@section('container')
    <div class="row  justify-content-center">
        <div class="col-md-10 my-5">
            <h2 class="text-danger">
                {{ $post->title }}
            </h2>

            <p class="fs-6">By.
                <a href="/posts?author={{ $post->user->username }}"
                    class="text text-decoration-none fw-bold text-dark">{{ $post->user->name }}
                </a> in
                <a href="/posts?category={{ $post->category->slug }}"
                    class="text text-decoration-none fw-bold text-dark">{{ $post->category->name }}
                </a>
            </p>

            @if ($post->image)
                <div style="max-width: 800px" class="overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid">
            @endif



            <article class="my-3">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block text-danger my-4 text-decoration-none fw-bold">Back to posts</a>
        </div>
    </div>
@endsection
