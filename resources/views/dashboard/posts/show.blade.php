@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-10 my-3">
            <h2 class="text-danger">
                {{ $post->title }}
            </h2>

            <p class="fs-6">By.
                <span href="/posts?author={{ $post->user->username }}" class="text text-decoration-none fw-bold text-dark">
                    {{ $post->user->name }}
                </span> in
                <span href="/posts?category={{ $post->category->slug }}" class="text text-decoration-none fw-bold text-dark">
                    {{ $post->category->name }}
                </span>
            </p>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                Edit posts</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <span data-feather="x-circle"></span> Delete Post
                </button>
            </form>

            @if ($post->image)
                <div style="max-width: 350px" class="overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="img-fluid mt-2">
                </div>
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-2">
            @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
@endsection
