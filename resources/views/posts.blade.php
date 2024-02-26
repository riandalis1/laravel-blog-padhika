@extends('layouts.main')

@section('container')
    <h1 class="text-center text-danger border-bottom py-1 mt-5">{{ $title }}</h1>

    <div class="row justify-content-center my-2">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card m-4">
            @if ($posts[0]->image)
                <div style="max-height: 400px" class="mx-auto overflow-hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}" class="img-fluid">
                </div>
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <h5 class="card-title">
                    <a class="text-decoration-none text-danger"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                </h5>
                <p class="fs-6">
                    <small class="text-body-secondary">By.
                        <a href="/posts?author={{ $posts[0]->user->username }}"
                            class="text text-decoration-none fw-semibold text-dark">{{ $posts[0]->user->name }}
                        </a> in
                        <a href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text text-decoration-none fw-semibold text-dark">{{ $posts[0]->category->name }}
                        </a>{{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{!! substr($posts[0]->body, 0, 100) !!}<span>...</span></p>


                <a class="btn btn-outline-danger text rounded-0" href="/posts/{{ $posts[0]->slug }}">Read
                    more...</a>
            </div>
        </div>
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-6 mb-3">
                    <div class="card"">
                        <div class="position-absolute bg-dark opacity-75 px-3 py-2 text-white ">
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="text-decoration-none text-white">{{ $post->category->name }}</a>
                        </div>

                        @if ($post->image)
                            <div style="max-height: 200px" class="mx-auto overflow-hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="img-fluid">
                            </div>
                        @else
                            <img src="http://source.unsplash.com/500x200?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title border-bottom border-danger-subtle">
                                <a class="text-decoration-none text-danger"
                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                            </h5>
                            <p class="fs-6">
                                <small>By.
                                    <a href="/posts?author={{ $post->user->username }}"
                                        class="text text-decoration-none fw-semibold text-dark">{{ $post->user->name }}
                                    </a>{{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <div>
                                {!! substr($post->body, 0, 100) !!}<span>...</span>
                            </div>
                            <a class="btn btn-outline-danger" href="/posts/{{ $post->slug }}">Read
                                more...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    {{ $posts->links() }}

@endsection
